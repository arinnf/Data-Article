<?php 
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $npm = $_POST['npm'];
    $nama_lengkap = $_POST['nama_lengkap'];

    $nama_file = $_FILES['photo_profile']['name'];
    $ukuran_file = $_FILES['photo_profile']['size'];
    $tipe_file = $_FILES['photo_profile']['type'];
    $tmp_file = $_FILES['photo_profile']['tmp_name'];

    $path = "image/" . $nama_file;

    if ($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
        if ($ukuran_file <= 1000000){
            if (move_uploaded_file($tmp_file, $path)){
                $query = "INSERT INTO penulis VALUES('$npm', '$nama_lengkap', '$nama_file')";
                $sql = mysqli_query($koneksi, $query);
                if ($sql){
                    header("Location: index_penulis.php");
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

