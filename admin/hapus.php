<?php
include '../config/koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM berita WHERE id=$id");
header("Location: berita.php");