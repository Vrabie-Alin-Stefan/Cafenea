<?php

class UserService
{
    protected $con;
    public function __construct()
    {
        include('../app/models/DBconn.php');
        $this->con = $conn;
        //require_once '../con.php';
    }
    
    public function getUser($token)
    {
        $sql = "SELECT id FROM `user` WHERE token='". $token ."'";
        $result = $this->con->query($sql);

        $num = $result->num_rows;
        
        return $num;
    }

    public function SetUser($token)
    {
        $sql = "INSERT INTO `user` (`token`, `created_at`, `updated_at`) VALUES ('" . $token . "', " . date("Y-m-d") . ", " . time() . ")";
        
        if ($this->con->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->con->error;
        }
        
    }
}