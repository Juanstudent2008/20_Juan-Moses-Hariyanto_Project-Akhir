<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT INTO login(username, password) VALUES('$username','$password')");
header("location:index.php");
?>
