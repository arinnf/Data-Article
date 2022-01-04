<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Penulis</title>
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
    <h2>Lihat Data Penulis</h2>
    <div class="add-button">
        <a href="tambah_penulis.php">Tambah Data Penulis</a>
    </div>
    <table height="150px">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama Lengkap</th>
                <th>Photo Profile</th> 
                <th colspan="2" >Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM penulis");
            foreach($data as $baris){
            ?>
            <tr>
                <td><?= $baris['npm'] ?></td>
                <td><?= $baris['nama_lengkap'] ?></td>
                <td><?php echo "<img src='image/" . $baris['photo_profile'] . "'width='100'"; ?></td>
                <td>
                    <a class="delete-button" href="hapus_penulis.php?npm=<?= $baris['npm'] ?>">Hapus</a>
                </td>
                <td>
                    <a class="edit-button" href="edit_penulis.php?npm=<?= $baris['npm'] ?>">Edit</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>

