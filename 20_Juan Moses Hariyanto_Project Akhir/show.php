<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tim Futsal PETRA 1</title>
    <link rel="stylesheet" href="show.css">
</head>
<body>
<h2>Data Tim Futsal SMAKTRASA Futsal Academy</h2>
<a href="input.php">+ DAFTAR CALON PEMAIN TIM FUTSAL</a>
<br/><br/>

<table border="0" class="data-table">
    <thead>
        <tr>
            <th>nama</th>
            <th>umur</th>
            <th>email</th>
            <th>nopung</th>
            <th>alamat</th>
            <th>notelp</th>
            <th>option</th>
        </tr>
    </thead>
    <tbody>
    <?php
    include 'koneksi.php';  // Connect to database

    $data = mysqli_query($koneksi, "SELECT * FROM `join`");  // Query all tim
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['umur']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['nopung']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['notelp']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $d['id']; ?>">UPDATE</a>
                <a href="delete.php?id=<?php echo $d['id']; ?>">DELETE</a>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>

<br/>
<a href="landing_page.php">← Kembali ke Landing Page</a>
</body>
</html>
