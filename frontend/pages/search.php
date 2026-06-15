<?php
// Corrected absolute path for auth check
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/middleware/auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search | Mani-WorldStream</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/frontend/css/search.css">
    <link rel="stylesheet" href="/frontend/css/sidebar.css">
    
    <link rel="icon" type="image/jpeg" href="/frontend/assets/ManiWorldStream-Fevicon.png">

    <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>
</head>
<body>
       
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/frontend/pages/sidebar.php'; ?>

    <div class="search-page">

        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="searchInput" placeholder="Search Movies, Shows, Sports">
        </div>

        <h3 class="section-title">Results</h3>

        <div class="search-results" id="results">
            </div>

    </div>

    <script src="/frontend/js/search.js"></script>

</body>
</html>