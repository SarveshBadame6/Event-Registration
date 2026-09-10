<?php

$host = "sql204.infinityfree.com";
$user = "if0_42804724";
$password = "your_password";
$database = "if0_42804724_campus_event";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if (!$conn) {
    die("Database connection failed.");
}

?>
