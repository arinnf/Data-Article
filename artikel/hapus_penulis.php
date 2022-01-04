<?php 
include "koneksi.php";
$npm = $_GET['npm'];

$query = mysqli_query($koneksi, "DELETE FROM penulis WHERE npm='$npm'");

if ($query) {
    header("Location: index_penulis.php");
} else {
    echo "Data Gagal Dihapus";
}