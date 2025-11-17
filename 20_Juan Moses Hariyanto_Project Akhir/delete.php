<?php
// koneksi database
include 'koneksi.php';

// menangkap data kd_mahasiswa yang dikirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM `join` WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:show.php");
?>