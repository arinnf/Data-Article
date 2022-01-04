<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penulis</title>
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
    <h2>Edit Data Penulis</h2>
    <div class="container">
    <?php 
        include "koneksi.php";
        $npm = $_GET['npm'];
        $data = mysqli_query($koneksi, "SELECT * FROM penulis WHERE npm = '$npm'");
        $baris = mysqli_fetch_array($data);
    ?>
    <form action="editproses_penulis.php?npm=<?= $npm; ?>" method="POST">
        <label for="npm">NPM</label>
        <input type="number" name="npm" id="npm" value="<?= $npm; ?>" readonly>
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $baris['nama_lengkap'] ?>">
        <br><label for="photo_profile">Photo Profile</label><br>
        <br><input type="file" name="photo_profile" id="photo_profile" value="<?= $baris['photo_profile'] ?>"><br>
        <br><input type="submit" value="Edit" name="edit"><br>
    </form>
    </div>
</body>
</html>