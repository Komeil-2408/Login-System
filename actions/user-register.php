<?php

// Register User Code

include "db-connection.php";

// Get User Details
$name = $_POST['name'];
$mail = $_POST['mail'];
$username = $_POST['username'];
$password = $_POST['password'];

// Check If User Registered Before or Not
$query_exist_check = "SELECT * FROM `users` WHERE username = '$username'";
$user_exist_check = mysqli_query($connection, $query_exist_check);

session_start();
if ( mysqli_num_rows( $user_exist_check ) > 0 ) {
    $_SESSION['message'] = "You are Registered before !";
}
else {

    // Add User to DataBase
    $query_add_user = "INSERT INTO `users` (`name`, `mail`, `username`, `password`, `is_admin`) VALUES ('$name', '$mail', '$username', '$password', 0)";
    $user_register = mysqli_query($connection, $query_add_user);
    
    if ($user_register) {
        $_SESSION['message'] = "Registered successfully !";
    }
}

// Back to Main Page
header("location:../index.php");