<!DOCTYPE html>
<html lang="en">
<head> 

<title>Sign Up | Mani-WorldStream</title>
<link rel="stylesheet" href="../css/register.css">


</head>
<body>
<div class="register-container">
<form action="/api/register.php" method="POST">
    <h2>Create Account</h2>

    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Sign Up</button>

    <p>Already have account? <a href="login.php">Login</a></p>

</form>
</div>

</body>
</html>