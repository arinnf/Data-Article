<?php 
include "koneksi.php";

if (isset($_POST['simpan'])) {
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
                $query = "INSERT INTO artikel VALUES('$id_artikel', '$judul_artikel', '$isi_artikel', '$nama_file', '$id_kategori', '$npm')";
                $sql = mysqli_query($koneksi, $query);
                if ($sql){
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