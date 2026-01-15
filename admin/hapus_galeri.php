<?php
include '../config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT foto FROM galeri WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

unlink("../upload/galeri/" . $row['foto']);

mysqli_query($conn, "DELETE FROM galeri WHERE id='$id'");

header("Location: galeri.php");
?>