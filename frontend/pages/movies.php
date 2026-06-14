<?php
include __DIR__ . '/../../backend/middleware/auth_check.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Movies | Mani-WorldStream</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/movies.css">
    <link rel="stylesheet" href="/css/sidebar.css">

    <link rel="icon" type="image/jpeg" href="/frontend/assets/ManiWorldStream-Fevicon.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>

</head>

<body>

<!-- CYBER GLOW -->
<div class="bg-glow glow1"></div>
<div class="bg-glow glow2"></div>

<!-- SIDEBAR -->
<?php include 'sidebar.php'; ?>

<!-- ====================================================== -->
<!-- MOVIE PAGE -->
<!-- ====================================================== -->

<div class="movie-page">

    <!-- ====================================================== -->
    <!-- HERO -->
    <!-- ====================================================== -->

    <section class="movie-hero">

        <div class="hero-overlay"></div>

        <iframe
        src="https://www.youtube.com/embed/TcMBFSGVi1c?autoplay=1&mute=1&controls=0&loop=1&playlist=TcMBFSGVi1c"
        allow="autoplay"
        allowfullscreen>
        </iframe>

        <div class="hero-content">

            <span class="hero-tag">
                MARVEL • ENDGAME
            </span>

            <h1>Avengers Endgame</h1>

            <p>
                The Avengers unite for one final battle to reverse
                the destruction caused by Thanos and restore the universe.
            </p>

            <div class="hero-buttons">

                <button class="play-btn">
                    <i class="fa-solid fa-play"></i>
                    Watch Now
                </button>

                <button class="watch-btn">
                    <i class="fa-solid fa-plus"></i>
                    Watchlist
                </button>

            </div>

        </div>

    </section>

    <!-- ====================================================== -->
    <!-- TRENDING MOVIES -->
    <!-- ====================================================== -->

    <section class="movie-row-section">

        <div class="row-header">

            <h2>Trending Movies</h2>

            <span>TOP PICKS</span>

        </div>

        <div class="movie-slider">

            <!-- CARD -->

            <div class="movie-card">

                <iframe
                src="https://www.youtube.com/embed/zSWdZVtXT7E?autoplay=1&mute=1&controls=0&loop=1&playlist=zSWdZVtXT7E"
                allow="autoplay"
                allowfullscreen>
                </iframe>

                <div class="movie-card-info">

                    <h3>Interstellar</h3>

                    <p>Sci-Fi Adventure</p>

                    <button>▶ Watch</button>

                </div>

            </div>

            <!-- CARD -->

            <div class="movie-card">

                <iframe
                src="https://www.youtube.com/embed/uYPbbksJxIg?autoplay=1&mute=1&controls=0&loop=1&playlist=uYPbbksJxIg"
                allow="autoplay"
                allowfullscreen>
                </iframe>

                <div class="movie-card-info">

                    <h3>Dune</h3>

                    <p>Epic Sci-Fi</p>

                    <button>▶ Watch</button>

                </div>

            </div>

            <!-- CARD -->

            <div class="movie-card">

                <iframe
                src="https://www.youtube.com/embed/y1-w1kUGuz8?autoplay=1&mute=1&controls=0&loop=1&playlist=y1-w1kUGuz8"
                allow="autoplay"
                allowfullscreen>
                </iframe>

                <div class="movie-card-info">

                    <h3>Kalki 2898</h3>

                    <p>Indian Futuristic Epic</p>

                    <button>▶ Watch</button>

                </div>

            </div>

        </div>

    </section>

    <!-- ====================================================== -->
    <!-- SUPERHERO -->
    <!-- ====================================================== -->

    <section class="movie-row-section">

        <div class="row-header">

            <h2>Superhero Universe</h2>

            <span>MARVEL • DC</span>

        </div>

        <div class="movie-slider">

            <div class="movie-card">

                <iframe
                src="https://www.youtube.com/embed/JfVOs4VSpmA?autoplay=1&mute=1&controls=0&loop=1&playlist=JfVOs4VSpmA"
                allow="autoplay"
                allowfullscreen>
                </iframe>

                <div class="movie-card-info">

                    <h3>Spider-Man</h3>

                    <p>Multiverse Saga</p>

                    <button>▶ Watch</button>

                </div>

            </div>

            <div class="movie-card">

                <iframe
                src="https://www.youtube.com/embed/8ugaeA-nMTc?autoplay=1&mute=1&controls=0&loop=1&playlist=8ugaeA-nMTc"
                allow="autoplay"
                allowfullscreen>
                </iframe>

                <div class="movie-card-info">

                    <h3>Iron-Man</h3>

                    <p>Tony Stark's Journey</p>

                    <button>▶ Watch</button>

                </div>

            </div>

            <div class="movie-card">

                <iframe
                src="https://www.youtube.com/embed/EXeTwQWrcwY?autoplay=1&mute=1&controls=0&loop=1&playlist=EXeTwQWrcwY"
                allow="autoplay"
                allowfullscreen>
                </iframe>

                <div class="movie-card-info">

                    <h3>Dark Knight</h3>

                    <p>The Dark Knight Rises</p>

                    <button>▶ Watch</button>

                </div>

            </div>

        </div>

    </section>

    <!-- ====================================================== -->
    <!-- FOOTER -->
    <!-- ====================================================== -->

    <footer>

        <p>
            © 2026 Mani-WorldStream • Cinematic Movie Experience
        </p>

    </footer>

</div>

</body>
</html>