<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pemain</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <div class="navbar">
        
        <img src="logo.png" alt="Logo Futsal Club" class="logo"> 
        <a href="landing_page.php" class="log-out-button">Log out</a>
    </div>
    <h3>Tambah Pemain</h3>
    <form method="post" action="input_aksi.php">
        <table>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>umur</td>
                <td><input type="text" name="umur"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>nopung</td>
                <td><input type="text" name="nopung"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>notelp</td>
                <td><input type="text" name="notelp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>    
</body>
</html>