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

    public function getTable($token)
    {
        $sql = "SELECT numberTableOcupied FROM `user` WHERE token='". $token ."'";
        $result = $this->con->query($sql);

        $num = $result->num_rows;
        
        return $num;
    }

    public function SetTable($masa, $token)
    {
        $sql = "UPDATE `user` SET numberTableOcupied=" . $masa . " WHERE token='" .$token . "'";
        if ($this->con->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $this->con->error;
        }
    }

    public function GetOcupiedTables()
    {
        $sql = "SELECT numberTableOcupied FROM `user`";
        $result = $this->con->query($sql);
        $tables = [];
        $index = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tables[$index] = $row["numberTableOcupied"];
                $index++;
            }
        }

        return $tables;
    }
}