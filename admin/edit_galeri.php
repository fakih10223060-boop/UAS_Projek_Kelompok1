<?php
include '../config/koneksi.php';
$id = $_GET['id'];

if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $caption = $_POST['caption'];

    mysqli_query($conn, "
        UPDATE galeri SET
        judul='$judul',
        caption='$caption'
        WHERE id=$id
    ");

    header("Location: galeri.php");
}
?>