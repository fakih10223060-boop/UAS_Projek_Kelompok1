<?php
include '../config/koneksi.php'; // Pastikan path ini benar

// 1. Cek apakah ada parameter ID
if (isset($_GET['id'])) {
    
    // 2. Amankan ID dari SQL Injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // 3. Ambil nama foto dulu sebelum dihapus datanya
    $cek_data = mysqli_query($conn, "SELECT foto FROM berita WHERE id='$id'");
    
    // Cek apakah data ditemukan
    if (mysqli_num_rows($cek_data) > 0) {
        $row = mysqli_fetch_assoc($cek_data);
        $path_foto = "../upload/berita/" . $row['foto'];

        // 4. Cek apakah file fisik fotonya ada, baru hapus
        if (file_exists($path_foto) && !empty($row['foto'])) {
            unlink($path_foto);
        }

        // 5. Hapus data dari database
        $delete = mysqli_query($conn, "DELETE FROM berita WHERE id='$id'");

        if ($delete) {
            echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href='dashboard.php?page=berita';
            </script>";
        } else {
            echo "<script>
                alert('Gagal menghapus data di database.');
                window.location.href='dashboard.php?page=berita';
            </script>";
        }

    } else {
        echo "<script>alert('Data tidak ditemukan!'); window.location.href='dashboard.php?page=berita';</script>";
    }

} else {
    // Jika tidak ada ID di URL
    echo "<script>window.location.href='dashboard.php?page=berita';</script>";
}
?>