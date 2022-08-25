<?php

$err_prefix = $_SERVER['REMOTE_ADDR'] . ' | POST | Contact Form | ';
error_log($err_prefix . 'Recieved');
if (empty($_POST)) {
    // echo 'internal server error';
    error_log($err_prefix . 'Empty Post');
    http_response_code(422);
    exit;
}

// Vars
$fn = '';
$ln = '';
$email = '';
$interest = '';
$message = '';

// Get Data And Make Sure It's Not Empty
$fn = !empty($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '';
$ln = !empty($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '';

// Email Check
if (empty($_POST['email'])) {
    throw new Exception('Invalid Email', 100);
} else {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
}

// Interest Check
if (empty($_POST['interest'])) {
    throw new Exception('Empty Interest', 100);
} else {
    $interest = htmlspecialchars($_POST['interest']);
}

// Message Check
if (empty($_POST['message'])) {
    throw new Exception('Empty Message', 100);
} else {
    $message = htmlspecialchars($_POST['message']);
}

// Validate First Name
if (!preg_match("/^[a-zA-Z]*$/", $fn)) {
    error_log($err_prefix . 'Contains Invalid Characters');
    throw new Exception('First Name Contains Invalid Characters', 100);
}

// Validate Last Name
if (!preg_match("/^[a-zA-Z]*$/", $ln)) {
    error_log($err_prefix . 'Contains Invalid Characters');
    throw new Exception('First Name Contains Invalid Characters', 100);
}

// Validate Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    error_log($err_prefix . 'Invalid Email | ' . $email);
    throw new Exception('Invalid Email | ' . $email, 100);
}

// Validate Interest
if (!preg_match("/^[a-zA-Z ]*$/", $interest)) {
    error_log($err_prefix . 'Interest Contains Invalid Characters');
    throw new Exception('Interest Contains Invalid Characters', 100);
}

// Validate Message
// Validate First Name
if (!preg_match("/^[a-zA-Z0-9 @?!.$]*$/", $message)) {
    error_log($err_prefix . 'Message Contains Invalid Characters');
    throw new Exception('Message Contains Invalid Characters', 100);
}


// Print For Tests
// echo '<div>First Name: ' . $fn . '</div>';
// echo '<div>Last Name: ' . $ln . '</div>';
// echo '<div>Email: ' . $email . '</div>';
// echo '<div>Interest: ' . $interest . '</div>';
// echo '<div>Message: ' . $message . '</div>';


// Write To Database? 

// Forward As Email


$sucess = True;

if ($sucess) {
    error_log($err_prefix . 'Success');
} else {
    error_log($err_prefix . 'Failed');
}

// Redirect
http_response_code(201);
header('Location: /contact/thank-you.php');
