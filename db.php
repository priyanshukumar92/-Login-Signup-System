<?php
$host = "localhost";
$user = "root"; // Change if needed
$password = ""; // Change if your MySQL has password
$db = "user_auth";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
