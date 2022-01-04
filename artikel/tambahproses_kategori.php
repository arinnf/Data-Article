<?php 
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    $query = mysqli_query($koneksi, "INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES ('$id_kategori', '$nama_kategori')") or die (mysqli_error($koneksi));
    
    if ($query) {
        header("Location: index_kategori.php");
    } else {
        echo "Data Gagal Disimpan";
    }
}

