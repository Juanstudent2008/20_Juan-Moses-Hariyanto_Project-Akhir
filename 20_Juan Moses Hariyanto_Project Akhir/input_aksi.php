<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$email = $_POST['email'];
$nopung = $_POST['nopung'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];

mysqli_query($koneksi, "INSERT INTO `join` (nama, umur, email, nopung, alamat, notelp) VALUES('$nama','$umur','$email','$nopung','$alamat','$notelp')");
header("location:show.php");
?>
