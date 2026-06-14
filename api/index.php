<?php
// Add these lines to force errors to show on the white page
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$request_uri = $_SERVER['REQUEST_URI'];

// Check if user is logged in
if (isset($_SESSION['user'])) {
    // If already logged in and not on home page, send to home
    if ($request_uri !== '/frontend/pages/home.php') {
        header("Location: /frontend/pages/home.php");
        exit(); // Exit immediately after header
    }
} else {
    // If not logged in and not on login page, send to login
    if ($request_uri !== '/frontend/pages/login.php') {
        header("Location: /frontend/pages/login.php");
        exit(); // Exit immediately after header
    }
}

// NOTE: Do not put an exit() here if you want the rest of the page to load!
?>