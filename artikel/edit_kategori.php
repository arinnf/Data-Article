<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kategori</title>
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
    <h2>Edit Data Kategori</h2>
    <div class="container">
    <?php 
        include "koneksi.php";
        $id_kategori = $_GET['id_kategori'];
        $data = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori = '$id_kategori'");
        $baris = mysqli_fetch_array($data);
    ?>
    <form action="editproses_kategori.php?id_kategori=<?= $id_kategori; ?>" method="POST">
        <label for="id_kategori">ID Kategori</label></td>
        <input type="number" name="id_kategori" id="id_kategori" value="<?= $id_kategori; ?>" readonly>
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori" value="<?= $baris['nama_kategori'] ?>">
        <input type="submit" value="Edit" name="edit">
    </form>
    </div>
</body>
</html>