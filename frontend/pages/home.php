<?php
// Corrected absolute path for auth check
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/middleware/auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mani-WorldStream</title>

    <link rel="stylesheet" href="/frontend/css/home.css">
    <link rel="stylesheet" href="/frontend/css/sidebar.css">
    <link rel="icon" type="image/jpeg" href="/frontend/assets/ManiWorldStream-Fevicon.png">

    <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="bg-glow glow1"></div>
<div class="bg-glow glow2"></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/frontend/pages/sidebar.php'; ?>

<div class="main-content">

<section class="hero-slider">
    <div class="slide active">
        <img src="/frontend/images/Solo-Leveling.jpg" alt="Banner">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="tag">Arise</span>
            <h1>Solo Leveling</h1>
            <p>A young man discovers a hidden world of monsters and becomes a powerful hunter.</p>
            <div class="hero-buttons">
                <button class="watch-btn" onclick="openTrailer('https://www.youtube.com/embed/LrNvF8gcJPM')">▶ Watch Trailer</button>
                <button class="info-btn"><i class="fa-solid fa-circle-info"></i> More Info</button>
            </div>
        </div>
    </div>
    </section>

<section class="row">
    <div class="section-header">
        <h2>Popular Movies</h2>
        <span>Explore More</span>
    </div>
    <div class="slider">
        <div class="movie-card wide">
            <img src="/frontend/images/avengers-endgame.jpg" alt="Movie">
            <div class="movie-overlay">
                <h3>Avengers: Endgame</h3>
                <div class="card-buttons">
                    <button onclick="openTrailer('https://www.youtube.com/embed/TcMBFSGVi1c')">▶ Trailer</button>
                </div>
            </div>
        </div>
        </div>
</section>

<footer>
    <p>© 2026 Mani-WorldStream</p>
</footer>

</div>

<script src="/frontend/js/home.js"></script>
<script>
function openTrailer(link){
    document.getElementById("trailerModal").style.display = "flex";
    document.getElementById("trailerFrame").src = link + "?autoplay=1&mute=1&rel=0";
}
function closeTrailer(){
    document.getElementById("trailerModal").style.display = "none";
    document.getElementById("trailerFrame").src = "";
}
</script>

</body>
</html>