<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Kategori</title>
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
        </div>
    </header>
    <h2>Lihat Data Kategori</h2>
    <div class="add-button">
        <a href="tambah_kategori.php">Tambah Data Kategori</a>
    </div>
    <table height="150px">
        <thead>
            <tr>
                <th>ID Kategori</th>
                <th>Nama Kategori</th> 
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM kategori");
            foreach($data as $baris){
            ?>
            <tr>
                <td><?= $baris['id_kategori'] ?></td>
                <td><?= $baris['nama_kategori'] ?></td>
                <td>
                    <a class="delete-button" href="hapus_kategori.php?id_kategori=<?= $baris['id_kategori']?>">Hapus</a>
                </td>
                <td>
                    <a class="edit-button" href="edit_kategori.php?id_kategori=<?= $baris['id_kategori']?>">Edit</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>