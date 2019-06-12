<?php

class UserService
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
    
    public function removeOldUsers() 
    {
        $sql = "SELECT id,token,updated_at FROM `user`";
        $result = $this->connection->query($sql);  
        
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                if(time() - $row["updated_at"] > 3600) // 1 ora
                {
                    echo htmlspecialchars($this->verifyToken($row["token"]));
                    $this->removeUser($this->verifyToken($row["token"]));
                }
            }
        }
    }
}