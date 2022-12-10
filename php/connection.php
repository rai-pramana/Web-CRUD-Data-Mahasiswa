<?php
$serverName = "mysql_db";
$userName = "root";
$password = "root";
$dbName = "prodi";

// Create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>