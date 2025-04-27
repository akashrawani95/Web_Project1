<?php
$servername = "localhost";
$username = "root"; // my database username
$password = "";     // my database password
$database = "typingtest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
