<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <div class="navbar">
        <img src="logo.png" alt="Logo Futsal Club" class="logo"> 
        <a href="landing_page.php" class="log-out-button">Log out</a>
    </div>
    <br/><br/>
    <h3>UPDATE DATA PEMAIN</h3>
    <?php
    include 'koneksi.php';
    
    // Ambil ID dari URL dan Sanitasi untuk mencegah SQL Injection
    $id = $_GET['id'];
    $id_bersih = mysqli_real_escape_string($koneksi, $id); 
    
    // Query data
    $data = mysqli_query($koneksi, "SELECT * FROM `join` WHERE id='$id_bersih'");
    
    // KUNCI PERBAIKAN: Ambil data HANYA SEKALI (bukan loop while)
    $d = mysqli_fetch_array($data);
    
    // Cek jika data tidak ditemukan (untuk mencegah error array offset)
    if ($d === null) {
        echo "<p style='color: red; text-align: center;'>Data pemain dengan ID $id tidak ditemukan!</p>";
        die(); 
    }
    ?>
    <form method="post" action="update_aksi.php">
        <table>
            <tr>
                <td>nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>umur</td>
                <td>
                    <input type="text" name="umur" value="<?php echo $d['umur']; ?>">
                </td>
            </tr>
            <tr>
                <td>email</td>
                <td>
                    <input type="text" name="email" value="<?php echo $d['email']; ?>">
                </td>
            </tr>
            <tr>
                <td>nopung</td>
                <td>
                    <input type="text" name="nopung" value="<?php echo $d['nopung']; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                </td>
            </tr>
            <tr>
                <td>notelp</td>
                <td>
                    <input type="text" name="notelp" value="<?php echo $d['notelp']; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SIMPAN">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>