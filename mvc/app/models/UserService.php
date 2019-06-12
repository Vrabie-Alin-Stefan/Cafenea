<?php

class UserService
{
    protected $connection;
    public function __construct()
    {
        include('../app/models/DBconn.php');
        $this->connection = $conn;
    }
    
    public function getUser($token)
    {
        $sql = "SELECT id FROM `user` WHERE token='". $token ."'";
        $result = $this->connection->query($sql);

        $num = $result->num_rows;       
        return $num;
    }

    public function setUser($token)
    {
        $sql = "INSERT INTO `user` (`token`, `created_at`, `updated_at`) VALUES ('" . $token . "', " . date("Y-m-d") . ", " . time() . ")";
        
        if ($this->connection->query($sql) === TRUE) {
             echo '<script type="text/javascript"> console.log("New record created successfully"); </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;
        }   
    }
    
    public function removeUser($token) 
    {
        $sql = "DELETE FROM `user` WHERE token='" .$token . "'";
        
        if($this->connection->query($sql) === TRUE) {
            echo '<script type="text/javascript"> console.log("User deleted successfully"); </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;
        }
    }
    
    public function findUserTable($token)
    {
        $sql = "SELECT numberTableOcupied FROM `user` WHERE token='". $token ."'";
        $result = $this->connection->query($sql);
        
        $row = $result->fetch_assoc();
        return $row['numberTableOcupied'];
    }
}