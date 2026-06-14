<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/path/to/your/file.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>World TV | Mani-WorldStream</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/tv.css">
    <link rel="stylesheet" href="/css/sidebar.css">

    <link rel="icon" type="image/jpeg" href="/frontend/assets/ManiWorldStream-Fevicon.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/f003957674.js" crossorigin="anonymous"></script>

</head>

<body>

<!-- GLOW EFFECTS -->
<div class="bg-glow glow1"></div>
<div class="bg-glow glow2"></div>

<!-- SIDEBAR -->
<?php include 'sidebar.php'; ?>

<!-- ====================================================== -->
<!-- PAGE -->
<!-- ====================================================== -->

<div class="tv-page">

    <!-- ====================================================== -->
    <!-- HERO SECTION -->
    <!-- ====================================================== -->

    <section class="tv-hero">

        <div class="hero-overlay"></div>

        <iframe
        src="https://www.youtube.com/embed/gCNeDWCI0vo?autoplay=1&mute=1&controls=0&loop=1&playlist=gCNeDWCI0vo"
       title="YouTube video player"
frameborder="0"
allow="autoplay; encrypted-media"
allowfullscreen>
</iframe>
        <div class="hero-content">

            <span class="hero-tag">
                LIVE • FUTURISTIC STREAMING
            </span>

            <h1>WorldStream TV</h1>

            <p>
                Explore global entertainment, documentaries,
                sports, AI channels and immersive streaming.
            </p>

            <button>
                ▶ Explore Now
            </button>

        </div>

    </section>

    <!-- ====================================================== -->
    <!-- TRENDING -->
    <!-- ====================================================== -->

    <section class="stream-row">

        <div class="row-header">

            <h2>Trending Now</h2>

            <span>LIVE</span>

        </div>

        <div class="stream-slider">

            <!-- CARD 1 -->

            <div class="stream-card">

                <iframe
                src="https://www.youtube.com/embed/VfDW1N5J2PE?autoplay=1&mute=1&controls=0&loop=1&playlist=VfDW1N5J2PE"
                title="YouTube video player"
frameborder="0"
allow="autoplay; encrypted-media"
allowfullscreen>
</iframe>

                <div class="card-info">

                    <h3>Wild Earth</h3>

                    <p>
                        Nature Documentary
                    </p>

                    <button>▶ Watch</button>

                </div>

            </div>

            <!-- CARD 2 -->

            <div class="stream-card">

                <iframe
                src="https://www.youtube.com/embed/1ApjD9OoRFg?autoplay=1&mute=1&controls=0&loop=1&playlist=1ApjD9OoRFg"
                title="YouTube video player"
frameborder="0"
allow="autoplay; encrypted-media"
allowfullscreen>
</iframe>

                <div class="card-info">

                    <h3>CNN International</h3>

                    <p>
                        Global News
                    </p>

                    <button>▶ Watch</button>

                </div>

            </div>

            <!-- CARD 3 -->

            <div class="stream-card">

                <iframe
               title="YouTube video player"
frameborder="0"
allow="autoplay; encrypted-media"
allowfullscreen>
</iframe>

                <div class="card-info">

                    <h3>Cricket Universe</h3>

                    <p>
                        Live Sports Streaming
                    </p>

                    <button>▶ Watch</button>

                </div>

            </div>

        </div>

    </section>

    <!-- ====================================================== -->
    <!-- AI CHANNELS -->
    <!-- ====================================================== -->

    <section class="stream-row">

        <div class="row-header">

            <h2>AI Entertainment</h2>

            <span>FUTURE</span>

        </div>

        <div class="stream-slider">

            <!-- CARD 1 -->

            <div class="stream-card">

                <iframe
                src="https://www.youtube.com/embed/aqz-KE-bpKQ?autoplay=1&mute=1&controls=0&loop=1&playlist=aqz-KE-bpKQ"
                title="YouTube video player"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
                </iframe>

                <div class="card-info">

                    <h3>AI Cinema</h3>

                    <p>
                        Futuristic Visual Stories
                    </p>

                    <button>▶ Watch</button>

                </div>

            </div>

            <!-- CARD 2 -->

            <div class="stream-card">

                <iframe
                src="https://www.youtube.com/embed/b117a8_jALE?autoplay=1&mute=1&controls=0&loop=1&playlist=b117a8_jALE"
                title="YouTube video player"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
                </iframe>

                <div class="card-info">

                    <h3>NBA Universe</h3>

                    <p>
                        Basketball Highlights
                    </p>

                    <button>▶ Watch</button>

                </div>

            </div>

            <!-- CARD 3 -->

            <div class="stream-card">

                <iframe
                src="https://www.youtube.com/embed/ScMzIvxBSi4?autoplay=1&mute=1&controls=0&loop=1&playlist=ScMzIvxBSi4"
                title="YouTube video player"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen>
                </iframe>

                <div class="card-info">

                    <h3>Relax Stream</h3>

                    <p>
                        Chill Cinematic Visuals
                    </p>

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
            © 2026 Mani-WorldStream • Futuristic Streaming Platform
        </p>

    </footer>

</div>

</body>
</html>