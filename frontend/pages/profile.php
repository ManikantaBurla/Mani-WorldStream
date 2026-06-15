<?php
// Corrected absolute path for auth check
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/middleware/auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User-Profile | Mani-WorldStream</title>
    
    <link rel="stylesheet" href="/frontend/css/profile.css">
    <link rel="stylesheet" href="/frontend/css/sidebar.css">
    <link rel="icon" type="image/jpeg" href="/frontend/assets/ManiWorldStream-Fevicon.png">
    
    <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/frontend/pages/sidebar.php'; ?>

<div class="profile">
  <div class="card">
    <img src="images/user.png">
    <h2>Manikanta</h2>
    <p>Premium Member</p>

    <button>Watchlist</button>
    <button>History</button>
    <button>Logout</button>
  </div>
</div>
<div>
  <a href="sign-in">sign-in if you are new</a> 

<script src="/frontend/js/profile.js"></script>
</body>
</html>