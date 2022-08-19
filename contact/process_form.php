<?php

if (empty($_REQUEST)) {
    // echo 'internal server error';
    die();
}

$fn = !empty($_REQUEST['firstname']) ? htmlspecialchars($REQEST['firstname']) : '';
$ln = !empty($_REQUEST['lastname']) ? htmlspecialchars($REQEST['lastname']) : '';

// Validate Email

// Sanitize Email
$email = !empty($_REQUEST['lastname']) ? htmlspecialchars($REQEST['lastname']) : '';


// Validate Message

// Sanitize Message


// Write To Database? 

// Forward As Email?
