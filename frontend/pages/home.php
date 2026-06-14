<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/middleware/auth_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mani-WorldStream</title>

    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="icon" type="image/jpeg" href="/frontend/assets/ManiWorldStream-Fevicon.png">

    <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- BACKGROUND GLOW -->
<div class="bg-glow glow1"></div>
<div class="bg-glow glow2"></div>

<!-- SIDEBAR -->
<?php include 'sidebar.php'; ?>

<!-- MAIN CONTENT -->
<div class="main-content">

<!-- ===================================================== -->
<!-- HERO SLIDESHOW SECTION -->
<!-- ===================================================== -->

<section class="hero-slider">

    <!-- SLIDE 1 -->
    <div class="slide active">

        <img src="/images/Solo-Leveling.jpg" alt="Banner">

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <span class="tag">Arise</span>

            <h1>Solo Leveling</h1>

            <p>
                A young man discovers a hidden world of monsters and becomes a powerful hunter.
            </p>

            <div class="hero-buttons">

                <button class="watch-btn"
                    onclick="openTrailer('https://www.youtube.com/embed/LrNvF8gcJPM')">

                    ▶ Watch Trailer

                </button>

                <button class="info-btn">
                    <i class="fa-solid fa-circle-info"></i>
                    More Info
                </button>

            </div>

        </div>

    </div>

    <!-- SLIDE 2 -->
    <div class="slide">

        <img src="/images/Spider-man.jpg" alt="Banner">

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <span class="tag">MARVEL STUDIOS</span>

            <h1>Spider-Man</h1>

            <p>
                Spider-Man returns with a new story and multiverse action.
            </p>

            <div class="hero-buttons">

                <button class="watch-btn"
                    onclick="openTrailer('https://www.youtube.com/embed/8TZMtslA3UY')">

                    ▶ Watch Trailer

                </button>

                <button class="info-btn">
                    <i class="fa-solid fa-circle-info"></i>
                    More Info
                </button>

            </div>

        </div>

    </div>

    <!-- SLIDE 3 -->
    <div class="slide">

        <img src="/images/avatar.jpg" alt="Banner">

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <span class="tag">SCI-FI ADVENTURE</span>

            <h1>Avatar 2</h1>

            <p>
                Return to Pandora in the visually stunning world of Avatar.
            </p>

            <div class="hero-buttons">

                <button class="watch-btn"
                    onclick="openTrailer('https://www.youtube.com/embed/d9MyW72ELq0')">

                    ▶ Watch Trailer

                </button>

                <button class="info-btn">
                    <i class="fa-solid fa-circle-info"></i>
                    More Info
                </button>

            </div>

        </div>

    </div>

</section>

<!-- ===================================================== -->
<!-- POPULAR MOVIES -->
<!-- ===================================================== -->

<section class="row">

    <div class="section-header">
        <h2>Popular Movies</h2>
        <span>Explore More</span>
    </div>

    <div class="slider">

        <!-- CARD 1 -->
        <div class="movie-card wide">

            <img src="/images/avengers-endgame.jpg" alt="Movie">

            <div class="movie-overlay">

                <h3>Avengers: Endgame</h3>

                <div class="card-buttons">

                    <button onclick="openTrailer('https://www.youtube.com/embed/TcMBFSGVi1c')">

                        ▶ Trailer

                    </button>

                </div>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="movie-card wide">

            <img src="/images/Ramayana.jpg" alt="Movie">

            <div class="movie-overlay">

                <h3>Ramayana</h3>

                <div class="card-buttons">

                    <button onclick="openTrailer('https://www.youtube.com/embed/3-wSEehDBVk')">

                        ▶ Trailer

                    </button>

                </div>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="movie-card wide">

            <img src="/images/Kalki.jpeg" alt="Movie">

            <div class="movie-overlay">

                <h3>Kalki 2898 AD</h3>

                <div class="card-buttons">

                    <button onclick="openTrailer('https://www.youtube.com/embed/y1-w1kUGuz8')">

                        ▶ Trailer

                    </button>

                </div>

            </div>

        </div>

        <!-- CARD 4 -->
        <div class="movie-card wide">

            <img src="/images/avatar2.jpg" alt="Movie">

            <div class="movie-overlay">

                <h3>Avatar 2</h3>

                <div class="card-buttons">

                    <button onclick="openTrailer('https://www.youtube.com/embed/d9MyW72ELq0')">

                        ▶ Trailer

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ===================================================== -->
<!-- MOST WATCHED -->
<!-- ===================================================== -->

<section class="row">

    <div class="section-header">
        <h2>Most Watched</h2>
        <span>Trending Now</span>
    </div>

    <div class="slider">

        <!-- CARD 1 -->
        <div class="movie-card">

            <img src="/images/Interstellar.jpeg" alt="Movie">

            <div class="movie-overlay">

                <h3>Interstellar</h3>

                <button onclick="openTrailer('https://www.youtube.com/embed/HYVxnPmb15E')">

                    ▶ Trailer

                </button>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="movie-card">

            <img src="/images/Bahubali.jpeg" alt="Movie">

            <div class="movie-overlay">

                <h3>Bahubali</h3>

                <button onclick="openTrailer('https://www.youtube.com/embed/22oYiWnAcKM')">

                    ▶ Trailer

                </button>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="movie-card">

            <img src="/images/JungleBook.jpeg" alt="Movie">

            <div class="movie-overlay">

                <h3>Jungle Book</h3>

                <button onclick="openTrailer('https://www.youtube.com/embed/6btOgVUZu00')">

                    ▶ Trailer

                </button>

            </div>

        </div>

        <!-- CARD 4 -->
        <div class="movie-card">

            <img src="/images/Titanic.jpeg" alt="Movie">

            <div class="movie-overlay">

                <h3>Titanic</h3>

                <button onclick="openTrailer('https://www.youtube.com/embed/kVrqfYjkTdQ')">

                    ▶ Trailer

                </button>

            </div>

        </div>

    </div>

</section>

<!-- ===================================================== -->
<!-- TRAILER MODAL -->
<!-- ===================================================== -->

<div class="trailer-modal" id="trailerModal">

    <div class="modal-content">

        <span class="close-btn" onclick="closeTrailer()">
            &times;
        </span>

        <iframe
            id="trailerFrame"
           src=""
          frameborder="0"
         allow="autoplay; encrypted-media"
         allowfullscreen>
        </iframe>

    </div>

</div>

<!-- FOOTER -->

<footer>
    <p>© 2026 Mani-WorldStream</p>
</footer>

</div>

<!-- ===================================================== -->
<!-- JAVASCRIPT -->
<!-- ===================================================== -->

<script src="../js/home.js"></script>

<script>

/* TRAILER POPUP */

function openTrailer(link){

    document.getElementById("trailerModal").style.display = "flex";

   document.getElementById("trailerFrame").src =
link + "?autoplay=1&mute=1&rel=0";
}

function closeTrailer(){

    document.getElementById("trailerModal").style.display = "none";

    document.getElementById("trailerFrame").src = "";
}

</script>

</body>
</html>