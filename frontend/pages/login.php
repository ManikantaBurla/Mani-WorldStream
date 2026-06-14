<?php
session_start();

// Force display of errors so we can see what's wrong
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>If you see this, the PHP is working!</h1>";
// ... rest of your code ...
if (isset($_SESSION['user'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Mani-WorldStream</title>

    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/jpeg" href="/frontend/assets/ManiWorldStream-Fevicon.png">
</head>

<body>

<div class="login-container">
    <h2>Login or Sign Up</h2>
    <p>Enter your email or mobile number</p>

    <form action="/api/login_handler.php" method="POST" onsubmit="return validateLogin()">

        <input type="text" name="username" id="username" placeholder="Email or Mobile Number">

        <input type="password" name="password" id="password" placeholder="Password">

        <button type="submit">Continue</button>

    </form>

    <span class="terms">
        By continuing, you agree to our <b>Terms of Use</b> & <b>Privacy Policy</b>
    </span>
    <p1>New user? <a href="register.php">Create account</a></p1>
</div>


<script src="../js/login.js"></script>
</body>
</html>