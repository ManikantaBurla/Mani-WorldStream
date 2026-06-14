<?php
session_start();

// 1. Correct include path
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

// 2. Ensure $conn is globally available
global $conn;

if (!$conn) {
    die("Database connection failed. Please check environment variables.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Use prepared statement
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if ($password === $row['password']) {
            $_SESSION['user'] = $username;
            // Redirect using absolute path from root
            header("Location: /frontend/pages/home.php");
            exit();
        }
    }
    
    // Generic error for both wrong user and wrong password
    header("Location: /frontend/pages/login.php?error=1");
    exit();
}
?>