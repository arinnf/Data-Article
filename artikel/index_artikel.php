<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Artikel</title>
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
    <h2>Lihat Data Artikel</h2>
    <div class="add-button">
        <a href="tambah_artikel.php">Tambah Data Artikel</a>
    </div>
    <table height="150px">
        <thead>
            <tr>
                <th>ID Artikel</th>
                <th>Judul Artikel</th> 
                <th>Isi Artikel</th>
                <th>Gambar Artikel</th>
                <th>ID Kategori</th>
                <th>NPM</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM artikel");
            foreach($data as $baris){
            ?>
            <tr>
                <td><?= $baris['id_artikel'] ?></td>
                <td><?= $baris['judul_artikel'] ?></td>
                <td><?= $baris['isi_artikel'] ?></td>
                <td><?= "<img src='image/" . $baris['gambar_artikel'] . "'width='100'"; ?></td>
                <td><?= $baris['id_kategori'] ?></td>
                <td><?= $baris['npm'] ?></td>
                <td>
                    <a class="delete-button" href="hapus_artikel.php?id_artikel=<?= $baris['id_artikel']?>">Hapus</a>
                </td>
                <td>
                    <a class="edit-button" href="edit_artikel.php?id_artikel=<?= $baris['id_artikel']?>">Edit</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>