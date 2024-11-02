<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'comment';

$conn = new mysqli($server, $user, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
