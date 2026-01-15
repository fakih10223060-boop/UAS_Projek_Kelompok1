<?php
require_once __DIR__ . "/../config/koneksi.php";



if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];

    move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/img/" . $gambar);

    mysqli_query($conn, "INSERT INTO galeri (judul, deskripsi, gambar)
                         VALUES ('$judul','$deskripsi','$gambar')");

    header("dashboard.php?page=tambah_galeri");
}

?>

<head>
    <meta charset="UTF-8">
    <title>Tambah galeri</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="max-w-2xl bg-white p-8 rounded-2xl shadow-lg border border-slate-200">

    <!-- Header -->
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-slate-800">Tambah Galeri</h2>
        <p class="text-sm text-slate-500 mt-1">
            Upload gambar dan deskripsi untuk galeri website
        </p>
    </div>

    <!-- Form -->
    <form method="post" enctype="multipart/form-data" class="space-y-6">

        <!-- Judul -->
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">
                Judul Galeri
            </label>
            <input type="text" name="judul" required placeholder="Contoh: Umroh Ramadhan 2025" class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm
                       focus:outline-none focus:ring-2 focus:ring-slate-800 focus:border-slate-800 transition">
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">
                Deskripsi
            </label>
            <textarea name="deskripsi" rows="4" placeholder="Deskripsi singkat tentang kegiatan atau dokumentasi..."
                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm
                       focus:outline-none focus:ring-2 focus:ring-slate-800 focus:border-slate-800 transition"></textarea>
        </div>

        <!-- Upload -->
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Upload Gambar
            </label>

            <div class="flex items-center gap-4">
                <input type="file" name="gambar" required class="block w-full text-sm text-slate-600
                           file:mr-4 file:py-2 file:px-4
                           file:rounded-xl file:border-0
                           file:text-sm file:font-semibold
                           file:bg-slate-100 file:text-slate-700
                           hover:file:bg-slate-200 transition">
            </div>

            <p class="text-xs text-slate-400 mt-2">
                Format JPG / PNG, maksimal 2MB
            </p>
        </div>

        <!-- Action -->
        <div class="flex items-center gap-3 pt-4">
            <button name="simpan" class="bg-slate-900 hover:bg-slate-800 text-white px-6 py-3 rounded-xl
                       text-sm font-semibold transition shadow">
                <a href="dashboard.php?page=galeri"></a>
                💾 Simpan Galeri
            </button>

            <a href="dashboard.php?page=galeri" class="px-6 py-3 rounded-xl text-sm font-medium
                       bg-slate-100 hover:bg-slate-200 text-slate-700 transition">
                Kembali
            </a>
        </div>

    </form>
</div>