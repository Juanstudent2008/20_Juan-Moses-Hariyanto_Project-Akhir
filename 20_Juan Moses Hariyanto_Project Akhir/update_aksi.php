<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$email = $_POST['email'];
$nopung = $_POST['nopung'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];

mysqli_query($koneksi, "UPDATE `join` SET nama='$nama', umur='$umur', email='$email', nopung='$nopung', alamat='$alamat', notelp='$notelp' WHERE id='$id'");

header("location:show.php");
?>