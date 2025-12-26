<?php
include '../config/koneksi.php';

session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['simpan'])) {
    $judul   = $_POST['judul'];
    $caption = $_POST['caption'];

    $foto = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "../upload/berita/" . $foto);

    mysqli_query($conn, "
        INSERT INTO berita (judul, caption, foto)
        VALUES ('$judul', '$caption', '$foto')
    ");

    header("Location: berita.php");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-xl rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Tambah Berita
        </h2>

        <form method="POST" enctype="multipart/form-data" class="space-y-5">

            <!-- Judul -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Judul Berita
                </label>
                <input type="text" name="judul" required placeholder="Masukkan judul berita"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Caption -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Caption
                </label>
                <textarea name="caption" rows="4" placeholder="Tuliskan caption atau ringkasan berita"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>

            <!-- Upload Foto -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Foto Berita
                </label>
                <input type="file" name="foto" accept="image/*" required onchange="previewImage(event)"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-white">

                <!-- Preview -->
                <img id="preview" class="mt-4 hidden w-full h-48 object-cover rounded-lg border">
            </div>

            <!-- Button -->
            <div class="flex justify-between items-center pt-4">
                <a href="berita.php" class="text-sm text-gray-500 hover:text-blue-600">
                    ← Kembali
                </a>

                <button name="simpan"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition">
                    Simpan Berita
                </button>
            </div>

        </form>
    </div>

    <script>
    function previewImage(event) {
        const preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(event.target.files[0]);
        preview.classList.remove('hidden');
    }
    </script>

</body>

</html>