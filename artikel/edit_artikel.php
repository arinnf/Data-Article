<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Artikel</title>
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
    <h2>Edit Data Artikel</h2>
    <div class="container">
    <?php 
        include "koneksi.php";
        $id_artikel = $_GET['id_artikel'];
        $data = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel = '$id_artikel'");
        $baris = mysqli_fetch_array($data);
    ?>
    <form action="editproses_artikel.php?id_artikel=<?= $id_artikel; ?>" enctype="multipart/form-data" method="POST">
        <label for="id_artikel"><strong>ID Artikel</strong></label>
        <input type="number" name="id_artikel" id="id_artikel" value="<?= $id_artikel ?>" readonly>
        <label for="judul_artikel"><strong>Judul Artikel</strong></label>
        <input type="text" name="judul_artikel" id="judul_artikel" value="<?= $baris['judul_artikel'] ?>">
        <label for="isi_artikel"><strong>Isi Artikel</strong></label>
        <input type="text" name="isi_artikel" id="isi_artikel" value="<?= $baris['isi_artikel'] ?>">
        <br><label for="gambar_artikel">Gambar Artikel</label></br>
        <br><input type="file" name="gambar_artikel" id="gambar_artikel" value="<?= $baris['gambar_artikel'] ?>"></br>
        <br><label for="id_kategori">ID Kategori</label></br>
        <select name="id_kategori">
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
        <select name="npm">
        <?php
            $query = mysqli_query($koneksi,"SELECT * FROM penulis");
            foreach($query as $data){ 
        ?>
            <option value="<?= $data['npm']; ?>"><?= $data['nama_lengkap']; ?></option>
        <?php
            }
        ?>
        </select>
        <input type="submit" value="Edit" name="edit" value="<?= $baris['nama_file'] ?>">
    </form>
    </div>
</body>
</html>