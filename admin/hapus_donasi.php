<?php
include "../config/koneksi.php";

// 1. Ambil ID yang dikirim melalui URL
$id = $_GET['id'];

// 2. Jalankan perintah hapus di database
$query = mysqli_query($conn, "DELETE FROM donasi WHERE id = '$id'");

if ($query) {
    // 3. LANGSUNG arahkan kembali ke tabel data donasi tanpa alert/pop-up
    header("Location: dashboard.php?page=datadonasi");
    exit(); 
} else {
    // Tampilkan pesan jika gagal
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>