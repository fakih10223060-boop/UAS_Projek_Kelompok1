<?php
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $judul     = mysqli_real_escape_string($conn, $_POST['judul']);
    $target    = mysqli_real_escape_string($conn, $_POST['target_dana']); // dari form
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $status    = 'aktif';

    // upload gambar
    $gambar = null;

    if (!empty($_FILES['gambar']['name'])) {
        $ext = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
        $gambar = time() . '_' . uniqid() . '.' . $ext;
        move_uploaded_file(
            $_FILES['gambar']['tmp_name'],
            '../asset/galeri/' . $gambar
        );
    }

    // INSERT sesuai kolom database
    mysqli_query($conn, "
        INSERT INTO program 
        (judul, deskripsi, target_dana, dana_terkumpul, gambar, status)
        VALUES 
        ('$judul', '$deskripsi', '$target', 0, '$gambar', '$status')
    ");

    // kembali ke halaman program
    header("Location: dashboard.php?page=program_unggulan");
    exit;
}