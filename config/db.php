<?php
// config/db.php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$name = getenv('DB_NAME');
$port = getenv('DB_PORT');

// Create connection
$conn = mysqli_connect($host, $user, $pass, $name, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set character set to utf8mb4 for full emoji/special character support
mysqli_set_charset($conn, "utf8mb4");
?>