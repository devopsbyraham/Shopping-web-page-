<?php

session_start();
$host = "127.0.0.1";
$user = "root";
$pasword = "";
$db_name = "ecommerce";

$conn = mysqli_connect($host, $user, $pasword, $db_name);
//check connection
if(!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
?>