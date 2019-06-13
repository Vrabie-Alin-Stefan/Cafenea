<?php

class OrderService
{
    protected $connection;
    public function __construct()
    {
        include('../app/models/DBconn.php');
        $this->connection = $conn;
    }
    
    private function verifyToken($user_token) 
    {
        $upgraded_token = "";
        for($i=0;$i<strlen($user_token);$i++)
        {
            if($user_token[$i] === '\'' || $user_token[$i] === '\\')
            {
                $upgraded_token .= '\\' . $user_token[$i]; 
            } else 
            {
                $upgraded_token .= $user_token[$i];
            }
        }
        return $upgraded_token;
    }
 
    public function getProductId($name) 
    {
        $sql = "SELECT id FROM product WHERE productName='". $name ."'";
        $result = $this->connection->query($sql);
        
        $row = $result->fetch_assoc();
        return $row['id'];
    }
    
    public function getProductName($id) 
    {
        $sql = "SELECT productName FROM product WHERE id='". $id ."'";
        $result = $this->connection->query($sql);
        
        $row = $result->fetch_assoc();
        return $row['productName'];
    }
    
    public function getProductStock($name) 
    {
        $sql = "SELECT productStock FROM product WHERE productName='". $name ."'";
        $result = $this->connection->query($sql);
        
        $row = $result->fetch_assoc();
        return $row['productStock'];
    }
    
    public function getProductPrice($name) 
    {
        $sql = "SELECT price FROM product WHERE productName='". $name ."'";
        $result = $this->connection->query($sql);
        
        $row = $result->fetch_assoc();
        return $row['price'];
    }
    
    public function setOrder($userId,$productName,$quantity) 
    {
        $price = $this->getProductPrice($productName)*$quantity;
        $sql = "INSERT INTO `order` (`id_user`, `id_product`, `orderedQuantity`, `orderDate`, `billPrice`, `created_at`, `updated_at`) VALUES "
                . "(" . $userId . ", " . $this->getProductId($productName) . ", " . $quantity . ", now(), " . $price . ", "
                . date("Y-m-d") . ", " . time() . ")";
        
        if ($this->connection->query($sql) === TRUE) {
             echo '<script type="text/javascript"> console.log("New record created successfully"); </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;
        }
    }
    
    public function removeFromStock($name,$quantity)
    {
        $new_quantity = $this->getProductStock($name) - $quantity;
        $sql = "UPDATE product SET productStock=" . $new_quantity . ", updated_at=" . time() . " WHERE productName='" . $name . "'";
        if ($this->connection->query($sql) === TRUE) {
            echo '<script type="text/javascript"> console.log("Record updated successfully"); </script>';
        } else {
            echo "Error updating record: " . $this->connection->error;
        }
    }
    
    public function findUserProductsOrdered($userId)
    {
        $sql = "SELECT id_product,orderedQuantity,billPrice FROM `order` WHERE id_user=". $userId;
        $result = $this->connection->query($sql);
        $orders = [];
        $index = 0;
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                $orders[$index] = [];
                $orders[$index]['id'] = $row['id_product'];
                $orders[$index]['quantity'] = $row['orderedQuantity'];
                $orders[$index]['price'] = $row['billPrice'];
                $index++;
            }
        }
        return $orders;
    }
    
    public function findTotalBillPrice($userId)
    {
        $sql = "SELECT sum(billPrice) as suma FROM `order` WHERE id_user=". $userId;
        $result = $this->connection->query($sql);
       
        $row = $result->fetch_assoc();
        return $row['suma'];
    }
}

