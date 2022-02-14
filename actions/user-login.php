<?php

// User LogIn Code

include "db-connection.php";

// Get Username Password From Login Page
$username = $_POST['username'];
$password = $_POST['password'];

// Check If User Inputs Matches
$query = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";

$command = mysqli_query($connection, $query);

session_start();

// If Login Success
if ( mysqli_num_rows($command) > 0 ) {
    $_SESSION['message'] = "Welcome !";

    // Set Login Coockie
    $coockie_name = "is_loggedin";
    $coockie_value = TRUE;
    setcookie($coockie_name, $coockie_value, time()+10, "/");
}
// If Login Fail
else {
    $_SESSION['message'] = "Username or Password incorrect !";
}

// Back To Main Page
header("location:../index.php");