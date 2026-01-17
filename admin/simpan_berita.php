<?php
include '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $judul   = mysqli_real_escape_string($conn, $_POST['judul']);
    $caption = mysqli_real_escape_string($conn, $_POST['caption']);
    
    // Proses Upload Foto
    $foto      = $_FILES['foto']['name'];
    $tmp_name  = $_FILES['foto']['tmp_name'];
    $folder    = "../upload/berita/";

    if (move_uploaded_file($tmp_name, $folder . $foto)) {
        $query = mysqli_query($conn, "INSERT INTO berita (judul, caption, foto) VALUES ('$judul', '$caption', '$foto')");

        // Langsung redirect tanpa alert agar tidak ada layar putih
        header("location: dashboard.php?page=berita");
        exit;
    } else {
        echo "Gagal mengunggah foto.";
    }
}
?>