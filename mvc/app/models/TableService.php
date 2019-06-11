<?php

class TableService
{
    protected $con;
    public function __construct()
    {
        include('../app/models/DBconn.php');
        $this->con = $conn;
        //require_once '../con.php';
    }

    public function SetTable($masa, $token)
    {
        $sql = "UPDATE `user` SET numberTableOcupied=" . $masa . " WHERE token='" .$token . "'";
        if ($this->con->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $this->con->error;
        }
        $this->con->close();
    }
}