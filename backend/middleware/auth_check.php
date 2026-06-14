<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to login page using an absolute path from the domain root
    header("Location: /frontend/pages/login.php");
    exit;
}
?>