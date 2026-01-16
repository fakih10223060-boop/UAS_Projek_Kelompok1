<?php
include "../config/koneksi.php";

$id = $_GET['id'];

// Ambil nama file foto lama untuk dihapus dari folder (opsional tapi disarankan)
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT foto FROM berita WHERE id = '$id'"));
if ($data) {
    unlink("../upload/berita/" . $data['foto']);
}

// Jalankan perintah hapus
$query = mysqli_query($conn, "DELETE FROM berita WHERE id = '$id'");

// Langsung kembali ke dashboard tanpa pop-up
header("location: dashboard.php?page=berita");
exit;
?>