<?php
// PHP SCRIPT START

// Hubungkan ke database
include 'koneksi.php';

// Cek apakah form telah disubmit
if(isset($_POST['register'])){
    // Ambil data dari form
    $username = $_POST['username'];

    // Enkripsi password menggunakan password_hash
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    // Simpan data ke database
    // CATATAN: Pastikan nama tabel di database Anda adalah 'login'
    $query = "INSERT INTO login (username, password) VALUES ('$username','$password')";
    
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Cek apakah query berhasil
    if($result){
        // Redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='log_in.php';</script>";
    } else {
        // Tampilkan pesan error jika registrasi gagal
        echo "Gagal mendaftar!";
    }
}

// PHP SCRIPT END
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    
    <div class="navbar">
        
        <img src="logo.png" alt="Logo" class="logo"> 
        
        <div class="navbar-links">
            <a href="landing_page.php" class="nav-link active">Landing Page</a>
            <a href="about_us.php" class="nav-link">About Us</a>
        </div>

        <a href="log_in.php" class="log-in-button">Log In</a>
    </div>
        <h2>Form Registrasi</h2>
    <form method="POST">
        <label for="username">Masukkan Username</label>
        <input type="text" name="username" placeholder="Username" required><br>
        <label for="password">Masukkan Password</label>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="register">Daftar</button>
    </form>
    <p>sudah punya akun? |<a href="log_in.php">masukin disini</a></p>
</body>
</html>