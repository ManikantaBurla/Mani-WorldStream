<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: /frontend/pages/home.php"); // Use relative path
} else {
    header("Location: /frontend/pages/login.php"); // Use relative path
}
exit;
?>