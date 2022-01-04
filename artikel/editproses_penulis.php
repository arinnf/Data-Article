<?php 
include "koneksi.php";

if (isset($_POST['edit'])) {
    $npm = $_GET['npm'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $photo_profile = $_POST['photo_profile'];
    
    $query = mysqli_query($koneksi, "UPDATE penulis SET nama_lengkap = '$nama_lengkap', photo_profile = '$photo_profile' WHERE npm = '$npm'");
    
    if ($query) {
        header("Location: index_penulis.php");
    } else {
        echo "Data Gagal Diedit";
    }
}
