<?php

$host = "localhost";
$user = "your_username";
$password = "your_password";
$databaseName = "your_database";

$conn = mysqli_connect($host, $user, $password, $databaseName);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
