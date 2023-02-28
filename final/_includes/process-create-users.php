<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$first_name = sanitize_value($_POST['first_name']);
$last_name = sanitize_value($_POST['last_name']);
$email = sanitize_value($_POST['email']);
$password = sanitize_value($_POST['password']);


$result = add_user($first_name, $last_name, $email, $password);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/auth/login.php');
} else {
    $error_message = 'Sorry there was an error creating the user ' . mysqli_error($db_connection);
    redirect_to('/admin/users?error=' . $error_message);
}