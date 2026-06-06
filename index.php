<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: http://localhost/WorldStream/frontend/pages/home.php");
} else {
    header("Location: http://localhost/WorldStream/frontend/pages/login.php");
}
exit;