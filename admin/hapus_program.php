<?php
// keamanan dasar (opsional tapi disarankan)
// session_start();
// if (!isset($_SESSION['admin'])) {
//   header("Location: login.php");
//   exit;
// }

include '../config/koneksi.php';

// cek parameter id
if (!isset($_GET['id'])) {
  header("Location: program.php");
  exit;
}

$id = $_GET['id'];

// ambil data program (untuk hapus gambar)
$data = mysqli_query($conn, "SELECT gambar FROM program WHERE id='$id'");
$p = mysqli_fetch_assoc($data);

// hapus gambar jika ada
if ($p && !empty($p['gambar'])) {
  $file = "../asset/galeri/" . $p['gambar'];
  if (file_exists($file)) {
    unlink($file);
  }
}

// hapus data program
mysqli_query($conn, "DELETE FROM program WHERE id='$id'");

// kembali ke halaman program
header("Location: dashboard.php?page=program");
exit;