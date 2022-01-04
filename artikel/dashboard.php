<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    <div class="message">
        <p>Selamat Datang!</p>
    </div>
    <div class="data-list">
        <div class="text1">
            <p><strong>Jumlah Artikel</strong></p>
            <p>
            <?php 
                include "koneksi.php";
                $data = mysqli_query($koneksi, "SELECT * FROM artikel");
                $hitung = mysqli_num_rows($data);
                echo "{$hitung} Artikel";
            ?>
            </p>
        </div>
        <div class="text2">
            <p><strong>Jumlah Kategori</strong></p>
            <p>
            <?php 
                include "koneksi.php";
                $data = mysqli_query($koneksi, "SELECT * FROM kategori");
                $hitung = mysqli_num_rows($data);
                echo "{$hitung} Kategori";
            ?>
        </p>
        </div>
        <div class="text3">
            <p><strong>Jumlah Penulis</strong></p>
            <p>
            <?php 
                include "koneksi.php";
                $data = mysqli_query($koneksi, "SELECT * FROM penulis");
                $hitung = mysqli_num_rows($data);
                echo "{$hitung} Penulis";
            ?>
            </p>
        </div>
    </div>
</body>
</html>



