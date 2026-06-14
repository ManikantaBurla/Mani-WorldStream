<?php

session_start();
require_once __DIR__ . "/../config/db.php";

if (!$conn) {
    die("Database connection not established.");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $_SESSION['user'] = $username;

    header("Location: /frontend/pages/home.php");
    exit();

} else {

    header("Location: /frontend/pages/login.php?error=1");
    exit();
}

?>