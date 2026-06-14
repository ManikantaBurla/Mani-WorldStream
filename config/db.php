<?php
// config/db.php

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$name = getenv('DB_NAME');
$port = getenv('DB_PORT') ?: '3306';

// Define the connection as a global variable
$conn = mysqli_connect($host, $user, $pass, $name, $port);

if (!$conn) {
    error_log("Connection failed: " . mysqli_connect_error());
    die("Database error.");
}

mysqli_set_charset($conn, "utf8mb4");
?>