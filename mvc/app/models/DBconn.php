<?php

$servername = "localhost";
$ServerUsername = "root";
$ServerPassword = "";
$dbname = "project";

$conn = new mysqli($servername, $ServerUsername, $ServerPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
