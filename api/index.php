<?php
// Add these lines to force errors to show on the white page
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Check if user is logged in
if (isset($_SESSION['user'])) {
    // If already logged in and trying to go to login, send to home
    header("Location: /frontend/pages/home.php");
} else {
    // If not logged in, send to login
    // IMPORTANT: Make sure we aren't already on the login page to avoid the loop!
    if ($_SERVER['REQUEST_URI'] !== '/frontend/pages/login.php') {
        header("Location: /frontend/pages/login.php");
    }
}
exit();
?>