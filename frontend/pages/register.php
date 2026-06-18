<?php
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
    <title>Register | Mani-WorldStream</title>
    <link rel="stylesheet" href="/frontend/css/login.css">
    <link rel="icon" type="image/jpeg" href="/frontend/assets/ManiWorldStream-Fevicon.png">
</head>

<body>
<div class="login-container">
    <h2>Create an Account</h2>
    <p>Join Mani-WorldStream today</p>

    <form action="/api/register.php" method="POST">
        <input type="text" name="username" id="username" placeholder="Choose a Username" required>
        <input type="password" name="password" id="password" placeholder="Choose a Password" required>
        <button type="submit">Register</button>
    </form>

    <p1>Already have an account? <a href="/frontend/pages/login.php">Login here</a></p1>
</div>
</body>
</html>