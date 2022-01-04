<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Artikel</title>
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
    <h2>Tambah Data Artikel</h2>
    <div class="container">
        <form action="tambahproses_artikel.php" enctype="multipart/form-data" method="POST">
            <label for="id_artikel">ID Artikel</label></td>
            <input type="number" name="id_artikel" id="id_artikel">
            <label for="judul_artikel">Judul Artikel</label>        
            <input type="text" name="judul_artikel" id="judul_artikel">
            <label for="isi_artikel">Isi Artikel</label>
            <input type="text" name="isi_artikel" id="isi_artikel">
            <br><label for="gambar_artikel">Gambar Artikel</label></br>
            <br><input type="file" name="gambar_artikel" id="gambar_artikel"></br>
            <br><label for="id_kategori">ID Kategori</label></br>
            <select name="id_kategori" id="id_kategori">
                <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM kategori");
                    foreach($query as $data){ 
                    ?>
                    <option value="<?= $data['id_kategori']; ?>"><?= $data['nama_kategori']; ?></option>
                    <?php
                    }
                ?>
            </select>    
            <label for="npm">NPM</label>
            <select name="npm" id="npm">
                <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM penulis");
                    foreach($query as $data){ 
                    ?>
                    <option value="<?= $data['npm']; ?>"><?= $data['nama_lengkap']; ?></option>
                    <?php
                    }
                ?>
            </select>
            <input type="submit" value="Simpan" name="simpan">
        </form>
    </div>
</body>
</html>