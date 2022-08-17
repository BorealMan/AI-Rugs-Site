<?php
$root = $_SEVER['DOCUMENT_ROOT'];
include_once($root . 'includes/assets/head.php') ?>
<title>Official AIRUGS</title>
</head>

<body>
    <?php include_once($root . 'includes/assets/header.php') ?>
    <main>
        <section id="project-message">
            <div class="card">
                <h2>Project Goals:</h2>
                <p>
                    Ai Rug's is dedicated to pushing the limits of ai generated art. We have a team of prompt artists who use text to design unique images using
                    DALL·E 2.
                </p>
            </div>
        </section>

        <section id="slider">


            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php
                    $images = glob('includes/images/featured_rugs/*.png');
                    foreach ($images as $filename) {
                        echo '<div class="swiper-slide"><img src="' . $filename . '" alt="test" /></div>';
                    }
                    ?>
                    ...
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <script type="module">

        </script>
    </main>
    <?php include_once($root . 'includes/assets/footer.php') ?>