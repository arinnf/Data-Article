<?php 
include "koneksi.php";
$id_kategori = $_GET['id_kategori'];

$query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");

if ($query) {
    header("Location: index_kategori.php");
} else {
    echo "Data Gagal Dihapus";
}