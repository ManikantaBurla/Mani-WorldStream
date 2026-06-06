<?php
include '../../backend/middleware/auth_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User-Profile | Mani-WorldStream</title>
   <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="icon" type="image/jpeg" href="ManiWorldStream-Fevicon.png">
  <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>


    <link rel="icon" type="image/jpeg" href="ManiWorldStream-Fevicon.png">
</head>
<body>

<?php include 'sidebar.php'; ?>

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

<script src="../js/home.js"></script>
</body>
</html>