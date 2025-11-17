<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "loginn");
// Set charset and avoid echoing success messages here so pages can handle UI placement.
if ($koneksi) {
    mysqli_set_charset($koneksi, 'utf8mb4');
} else {
    error_log('Database connection failed: ' . mysqli_connect_error());
}
?>