<?php

class TableService
{
    protected $con;
    public function __construct()
    {
        include('../app/models/DBconn.php');
        $this->con = $conn;
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
    
    public function getTable($token)
    {
        $sql = "SELECT numberTableOcupied FROM `user` WHERE token='". $token ."'";

        $result = $this->con->query($sql);
        if ($row = $result->fetch_assoc()) 
        {
            if($row["numberTableOcupied"] == NULL)
            {
                echo 0;
                return 0;
            }
            else
            {
                echo 1;
                return 1;
            }
        }
        echo 00;
        return 0;
    }

    public function SetTable($masa, $token)
    {
        $sql = "UPDATE `user` SET numberTableOcupied=" . $masa . ", updated_at=" . time() . " WHERE token='" .$token . "'";
        if ($this->con->query($sql) === TRUE) {
            //echo '<script type="text/javascript"> console.log("Record updated successfully"); </script>';
        } else {
            //echo "Error updating record: " . $this->con->error;
        }
    }

    public function removeTable($token)
    {
        $sql = "UPDATE `user` SET numberTableOcupied = NULL, updated_at=" . time() . " WHERE token='" .$token . "'";

        if ($this->con->query($sql) === TRUE) {
            //echo '<script type="text/javascript"> console.log("Record updated successfully table"); </script>';
        } else {
            //echo "Error updating record: " . $this->con->error;
        }
    }

    public function GetOcupiedTables()
    {
        $sql = "SELECT * FROM `user`";
        $result = $this->con->query($sql);
        $tables = [];
        $index = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if(isset($row["numberTableOcupied"]))
                {
                    if(time() - $row["updated_at"] > 30)
                    {   
                        $this->removeTable($this->verifyToken($row["token"]));
                    }
                    else
                    {
                        $tables[$index] = $row["numberTableOcupied"];
                        $index++;
                    }
                }
            }
        }

        return $tables;
    }

    public function GetOcupiedTablesForFeed()
    {
        $sql = "SELECT * FROM `user`";
        $result = $this->con->query($sql);
        $tables = [];
        $index = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if(isset($row["numberTableOcupied"]))
                {
                    if(time() - $row["updated_at"] > 30) //100 secunde
                    {
                        $this->removeTable($this->verifyToken($row["token"]));
                    }
                    else
                    {

                        $tables[$index] = [];
                        $tables[$index]['id'] = $row['id'];
                        $tables[$index]['table'] = $row['numberTableOcupied'];
                        $tables[$index]['updated'] = date("Y-m-d", $row['updated_at']);
                        $index++;
                    }
                }
            }
        }

        return $tables;
    }
}