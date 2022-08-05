<?php
session_start();
$servername = "localhost:3325";
$server_user = "root";
$server_pass = "root@123";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>