<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/head.php') ?>
<title>SITEMAP | Official AIRUGS</title>
<link rel="stylesheet" href="sitemap.css">
</head>

<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/header.php') ?>
    <main>
        <h2>Site Map</h2>
        <ul>
            <li><a href='/'>Home</a></li>
            <li><a href='/mint'>Mint</a></li>
            <li><a href='/about'>About Our Project</a></li>
            <li><a href='/contact'>Contact Us</a></li>
            <li><a href='/privacy'>Privacy Policy</a></li>
            <li><a href='/sitemap'>Sitemap</a></li>
        </ul>
    </main>

    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/footer.php') ?>

    <?php http_response_code(200); ?>