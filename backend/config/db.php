<?php
// This tells PHP to grab the specific values you just saved in Vercel
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$name = getenv('DB_NAME');
$port = getenv('DB_PORT');

$conn = mysqli_connect($host, $user, $pass, $name, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>