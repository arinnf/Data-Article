<?php 
include "koneksi.php";
$id_artikel = $_GET['id_artikel'];

$query = mysqli_query($koneksi, "DELETE FROM artikel WHERE id_artikel='$id_artikel'");

if ($query) {
    header("Location: index_artikel.php");
} else {
    echo "Data Gagal Dihapus";
}