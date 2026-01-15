<?php
include '../config/koneksi.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['simpan'])) {

    $judul   = $_POST['judul'];
    $caption = $_POST['caption'];

    $foto = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "../upload/berita/" . $foto);

    mysqli_query($conn, "INSERT INTO berita (judul, caption, foto)
                         VALUES ('$judul', '$caption', '$foto')");

    header("Location: berita.php");
}
?>