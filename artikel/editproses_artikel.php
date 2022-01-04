<?php 
include "koneksi.php";

if (isset($_POST['edit'])) {
    $id_artikel = $_POST['id_artikel'];
    $judul_artikel = $_POST['judul_artikel'];
    $isi_artikel = $_POST['isi_artikel'];

    $nama_file = $_FILES['gambar_artikel']['name'];
    $ukuran_file = $_FILES['gambar_artikel']['size'];
    $tipe_file = $_FILES['gambar_artikel']['type'];
    $tmp_file = $_FILES['gambar_artikel']['tmp_name'];

    $id_kategori = $_POST['id_kategori'];
    $npm = $_POST['npm'];
    
    $path = "image/" . $nama_file;

    if ($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
        if ($ukuran_file <= 1000000){
            if (move_uploaded_file($tmp_file, $path)){
                $query = mysqli_query($koneksi, "UPDATE artikel SET id_artikel = '$id_artikel', judul_artikel = '$judul_artikel', isi_artikel = '$isi_artikel', gambar_artikel = '$nama_file', id_kategori = '$id_kategori', npm = '$npm' WHERE id_artikel = '$id_artikel'");
                if ($query){
                    header("Location: index_artikel.php");
                } else {
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                }
            } else {
                echo "Maaf, Gambar gagal untuk diupload.";
            }
        } else {
            echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB.";
        }
    } else {
        echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
    }
}