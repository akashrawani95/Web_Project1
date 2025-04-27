<?php
include 'dbconnect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Login successful!'); window.location.href='test.html';</script>";
} else {
    echo "<script>alert('Invalid credentials!'); window.location.href='index.html';</script>";
}

mysqli_close($conn);
?>
