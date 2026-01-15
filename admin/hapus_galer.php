<?php
include '../config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT foto FROM berita WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

unlink("../upload/berita.php/" . $row['foto']);

mysqli_query($conn, "DELETE FROM berita WHERE id='$id'");

header("Location: berita.php");
?>