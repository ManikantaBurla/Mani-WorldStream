<?php
include '../../backend/middleware/auth_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search | Mani-WorldStream</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
     <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    
    <link rel="icon" type="image/jpeg" href="ManiWorldStream-Fevicon.png">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>
</head>
<body>
       
    <!-- Sidebar will be loaded by JS -->
    <?php include 'sidebar.php'; ?>

    <div class="search-page">

        <!-- Search Bar -->
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="searchInput" placeholder="Search Movies, Shows, Sports">
        </div>

        <!-- Results -->
        <h3 class="section-title">Results</h3>

        <div class="search-results" id="results">
            <!-- Cards injected by JS -->
        </div>

    </div>

    <script src="../js/home.js"></script>

</body>
</html>