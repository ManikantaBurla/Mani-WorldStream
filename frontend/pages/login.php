<?php
// Force error reporting to catch issues
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Correct absolute path to reach db.php from /frontend/pages/
$db_path = $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

if (!file_exists($db_path)) {
    die("CRITICAL ERROR: Configuration file not found at " . $db_path);
}

require_once $db_path;

session_start();

// Redirect if already logged in
if (isset($_SESSION['user'])) {
    header("Location: /frontend/pages/home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Mani-WorldStream</title>
    <link rel="stylesheet" href="/frontend/css/login.css">
    <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/jpeg" href="/frontend/assets/ManiWorldStream-Fevicon.png">
</head>

<body>
<div class="login-container">
    <h2>Login or Sign Up</h2>
    <p>Enter your credentials</p>

    <form action="/api/login_handler.php" method="POST">
        <input type="text" name="username" id="username" placeholder="Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <button type="submit">Continue</button>
    </form>

    <span class="terms">
        By continuing, you agree to our <b>Terms of Use</b> & <b>Privacy Policy</b>
    </span>
    <p1>New user? <a href="/frontend/pages/register.php">Create account</a></p1>
</div>

<script src="/frontend/js/login.js"></script>
</body>
</html>