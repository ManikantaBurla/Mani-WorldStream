<?php
session_start();

// 1. Correct include path to the database configuration
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

// 2. Ensure we use the $conn variable defined in db.php
// Since db.php is required here, $conn is available in this scope.
if (!isset($conn) || !$conn) {
    error_log("Database connection variable is not set or null.");
    die("Database connection failed. Please contact support.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Use prepared statement to prevent SQL Injection
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            // Verify password
            if ($password === $row['password']) {
                $_SESSION['user'] = $username;
                header("Location: /frontend/pages/home.php");
                exit();
            }
        }
        $stmt->close();
    }
    
    // If login fails (user not found or wrong password)
    header("Location: /frontend/pages/login.php?error=1");
    exit();
}
?>