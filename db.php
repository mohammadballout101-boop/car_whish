<?php

$host = "sqlXXX.infinityfree.com";
$username = "if0_XXXXXXXX";
$password = "YOUR_DATABASE_PASSWORD";
$database = "if0_XXXXXXXX_smart_city";

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database
);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>