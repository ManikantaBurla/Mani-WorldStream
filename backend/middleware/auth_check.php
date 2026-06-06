<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../../frontend/pages/login.php");
    exit;
}