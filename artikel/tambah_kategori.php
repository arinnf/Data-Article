<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kategori</title>
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
    <h2>Tambah Data Kategori</h2>
    <div class="container">
    <form action="tambahproses_kategori.php" method="POST">
        <label for="id_kategori">ID Kategori</label></td>
        <input type="number" name="id_kategori" id="id_kategori">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori">        
        <input type="submit" value="Simpan" name="simpan">   
    </form>
    </div>
</body>
</html>