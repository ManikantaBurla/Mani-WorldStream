<?php
session_start();
$conn = null;
// Use this globally in all your PHP files
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

if (!$conn) {
    die("Database connection not established.");
}

// Ensure the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SECURITY FIX: Use Prepared Statements to prevent SQL Injection
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // SECURITY NOTE: In a real app, use password_verify()
        // If you are storing passwords as plain text, this check works:
        if ($password === $row['password']) {
            $_SESSION['user'] = $username;
            header("Location: /frontend/pages/home.php");
            exit();
        } else {
            header("Location: /frontend/pages/login.php?error=1");
            exit();
        }
    } else {
        // User not found
        header("Location: /frontend/pages/login.php?error=1");
        exit();
    }
    $stmt->close();
}
?>