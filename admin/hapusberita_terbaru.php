<?php
require_once __DIR__ . '/../config/koneksi.php';

// Validasi ID
if (!isset($_GET['id'])) {
    header("Location: dashboard.php?page=berita_terbaru");
    exit;
}

$id = intval($_GET['id']);

// Ambil data gambar
$query = mysqli_query($conn, "SELECT gambar FROM berita_terbaru WHERE id = $id");
$data  = mysqli_fetch_assoc($query);

// Hapus file gambar jika ada
$path = __DIR__ . '/../asset/galeri/' . $data['gambar'];

if (!empty($data['gambar']) && file_exists($path)) {
    unlink($path);
}

// Hapus data dari database
mysqli_query($conn, "DELETE FROM berita_terbaru WHERE id = $id");

// Redirect
header("Location: dashboard.php?page=berita_terbaru");
exit;
?>