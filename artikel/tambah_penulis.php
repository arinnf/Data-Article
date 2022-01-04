<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Penulis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-logo">Admin</div>
        <div class="header-list">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="index_artikel.php">Artikel</a></li>
                <li><a href="index_kategori.php">Kategori</a></li>
                <li><a href="index_penulis.php">Penulis</a></li>
            </ul>
        </div>
    </header>
    <h2>Tambah Data Penulis</h2>
    <div class="container">
    <form action="tambahproses_penulis.php" enctype="multipart/form-data" method="POST">
        <label for="npm">NPM</label></td>
        <input type="number" name="npm" id="npm">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap">
        <br><label for="photo_profile">Photo Profile</label></br>
        <br><input type="file" name="photo_profile" id="photo_profile"><br>
        <br><input type="submit" value="Simpan" name="simpan"><br>
    </form>
    </div>
</body>
</html>