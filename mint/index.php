<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/head.php') ?>
<title>MINT | Official AIRUGS</title>
<link rel='stylesheet' src='mint.css'>
</head>

<?php

function DateTimeDiffToSeconds($diff)
{
    $days = $diff['d'] * 3600 * 24;
    $hours = $diff['h'] * 3600;
    $minutes = $diff['m'] * 60;
    $seconds = $diff['s'];

    $total = $days + $hours + $minutes + $seconds;
    return $total;
}

?>


<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/header.php') ?>
    <main>
        <?php
        // Switch Component Served Based On Time
        // Event Date
        $launchTime = new DateTime('2022-08-31 17:00:00');
        $now = new DateTime();

        $diff = $launchTime->getTimestamp() - $now->getTimestamp();

        if ($diff <= 0) {
            include_once($_SERVER['DOCUMENT_ROOT'] . '/mint/components/mint.php');
        } else {
            include_once($_SERVER['DOCUMENT_ROOT'] . '/mint/components/premint.php');
        }
        ?>

    </main>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/assets/footer.php') ?>

    <?php http_response_code(200); ?>