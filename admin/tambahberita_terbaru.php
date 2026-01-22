<?php
include '../config/koneksi.php';

if (isset($_POST['submit'])) {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $tgl = $_POST['tanggal'];
    $penulis = $_POST['penulis'];
    $isi = mysqli_real_escape_string($conn, $_POST['isi_berita']);
    $foto = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, "../asset/galeri/" . $foto)) {
        mysqli_query($conn, "INSERT INTO berita_terbaru VALUES ('', '$judul', '$tgl', '$penulis', '$foto', '$isi')");
        echo "<script>alert('Berita Berhasil Ditambah!'); window.location='dashboard.php?page=berita_terbaru';</script>";
    }
}
?>
<form method="POST" enctype="multipart/form-data" style="padding:20px; border:1px solid #ccc; max-width:500px;">
    <h2>Tambah Berita</h2>
    <input type="text" name="judul" placeholder="Judul" required style="width:100%; margin:5px 0;"><br>
    <input type="date" name="tanggal" required style="width:100%; margin:5px 0;"><br>
    <input type="text" name="penulis" placeholder="Penulis" required style="width:100%; margin:5px 0;"><br>
    <input type="file" name="gambar" required style="margin:5px 0;"><br>
    <textarea name="isi_berita" placeholder="Isi Berita" rows="5" style="width:100%; margin:5px 0;"></textarea><br>
    <button type="submit" name="submit" style="background:green; color:white; padding:10px;">Simpan Berita</button>
</form>