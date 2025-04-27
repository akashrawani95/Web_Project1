<?php
include 'dbconnect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registration successful!'); window.location.href='index.html';</script>";
} else {
    echo "<script>alert('Error: Email already exists or something went wrong!'); window.location.href='index.html';</script>";
}

mysqli_close($conn);
?>
