<?php
session_start();
include 'koneksi.php';

// determine connection status so we can show it in the UI (do not echo from koneksi.php)
$koneksi_ok = false;
$koneksi_err = '';
if ($koneksi) {
    $koneksi_ok = true;
} else {
    $koneksi_ok = false;
    $koneksi_err = mysqli_connect_error();
}


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM login WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);


    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("Location: input.php");
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="log_in.css">
</head>
<body>
    <div class="page-wrap">
        <header class="site-header" role="banner">
			<div class="container header-inner">
						<div class="logo" aria-label="Logo">
							<img src="logo.png" alt="Smaktrasa Futsal Club Logo" />
						</div>
					<nav class="main-nav" role="navigation" aria-label="Main navigation">
						<a class="nav-link active" href="landing_page.php">Landing Page</a>
						<span class="nav-sep">|</span>
						<a class="nav-link" href="about_us.php">About Us</a>
					</nav>
		        <a class="btn login" href="log_in.php">Log In</a>
			</div>
		</header>
            <?php if ($koneksi_ok): ?>
                <p class="conn-status ok">Koneksi berhasil</p>
            <?php else: ?>
                <p class="conn-status err">Koneksi gagal: <?php echo htmlspecialchars($koneksi_err); ?></p>
            <?php endif; ?>
        </div>

        <div class="card" role="main" aria-labelledby="login-title">
            <div class="card-header">
                <div class="headings">
                    <h2 id="login-title">Login</h2>
                    <h3>Masuk ke akun PETRA Futsal</h3>
                </div>
            </div>

            <form method="POST" class="login-form" novalidate>
                <table>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td><input id="username" type="text" name="username" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input id="password" type="password" name="password" placeholder="Password" required></td>
                    </tr>
                </table>

                <div class="actions">
                    <input type="submit" name="login" value="Masuk">
                </div>
            </form>

            <div class="link-row">
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
