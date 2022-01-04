<?php 
include "koneksi.php";

if (isset($_POST['edit'])) {
    $id_kategori = $_GET['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];
    
    $query = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'");
    
    if ($query) {
        header("Location: index_kategori.php");
    } else {
        echo "Data Gagal Diedit";
    }
}

