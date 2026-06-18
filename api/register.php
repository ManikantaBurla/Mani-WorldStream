<?php
require_once __DIR__ . "/../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    
    // SECURITY: Always hash passwords before storing!
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            // Success! Send them back to the visual login page
            header("Location: /frontend/pages/login.php?success=1");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Database error: Could not prepare statement.";
    }
}
?>