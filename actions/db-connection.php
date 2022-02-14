<?php

// Create Connection To DataBase

$host = "<<HOST_ADDRESS>>";
$db_username = "<<DATABASE_USERNAME>>";
$db_password = "<<DATABASE_PASSWORD>>";
$db_name = "<<DATABASE_NAME>>";

$connection = mysqli_connect($host, $db_username, $db_password, $db_name);
mysqli_set_charset($connection, "utf8");