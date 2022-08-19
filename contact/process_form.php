<?php
// ini_set("log_errors", TRUE);
// ini_set("error_log", './errs.txt');

$err_prefix = $_SERVER['REMOTE_ADDR'] . ' | POST | Contact Form | ';
error_log($err_prefix . 'Recieved');
if (empty($_POST)) {
    // echo 'internal server error';
    error_log($err_prefix . 'Empty Post');
    die();
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
if (!preg_match("/^[a-zA-Z0-9 @?!.]*$/", $fn)) {
    error_log($err_prefix . 'Contains Invalid Characters');
    throw new Exception('First Name Contains Invalid Characters', 100);
}



// Validate Email


// Sanitize Email


// Validate Message
// Validate First Name
if (!preg_match("/^[a-zA-Z0-9 @?!.]*$/", $message)) {
    error_log($err_prefix . 'Contains Invalid Characters');
    throw new Exception('Message Contains Invalid Characters', 100);
}

// Sanitize Message


// Final Error Check

// Write To Database? 

// Forward As Email?

echo '<div>First Name: ' . $fn . '</div>';
echo '<div>Last Name: ' . $ln . '</div>';
echo '<div>Email: ' . $email . '</div>';
echo '<div>Interest: ' . $interest . '</div>';
echo '<div>Message: ' . $message . '</div>';

error_log($err_prefix . 'Success');
