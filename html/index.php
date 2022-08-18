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
                    Ai Rugs is dedicated to pushing the limits of ai generated art. We have a team of prompt artists who use text to design unique images using
                    DALL·E 2.
                </p>
            </div>
        </section>

        <section id="slider">
            <div class='slider-container'>
                <div class="project-images">
                    <?php
                    $images = glob('includes/images/featured_rugs/*.png');
                    foreach ($images as $filename) {
                        echo '<img src="' . $filename . '" alt="test" />';
                    }
                    ?>
                </div>
            </div>
        </section>

    </main>
    <!-- Tiny Slider Code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="includes/scripts/tiny_slider.js"></script>
    <?php include_once($root . 'includes/assets/footer.php') ?>