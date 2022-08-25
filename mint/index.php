<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/head.php') ?>
<title>MINT | Official AIRUGS</title>
<link rel='stylesheet' src='mint.css'>
</head>


<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/header.php') ?>
    <main>
        <?php
        // Switch Component Served Based On Time
        // Event Date

        // If Passed Date Server Mint

        // Else Serve PreMint
        ?>

        <?php //include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/components/coming-soon.php'); 
        ?>
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/mint/components/premint.php');
        ?>
        <?php // include_once($_SERVER['DOCUMENT_ROOT'] . '/mint/components/mint.php');
        ?>
    </main>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/footer.php') ?>

    <?php http_response_code(200); ?>