<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "crud";

$link = mysqli_connect($host, $username, $password, $database);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
