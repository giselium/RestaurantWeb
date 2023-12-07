<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbtekwebe";

try 
{
    $connect = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) 
{
echo "Connection failed: " . $e->getMessage();
}

$conn = mysqli_connect($servername, $username, $password);
$db  = mysqli_select_db($conn, $database) or die(mysqli_error($conn));

?>