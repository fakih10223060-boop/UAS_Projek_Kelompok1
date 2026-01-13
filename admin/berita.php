<?php
include '../config/koneksi.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Berita</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-6xl mx-auto bg-white rounded-xl shadow-lg p-6">

        <h2 class="text-2xl font-bold text-gray-800 mb-6">📰 Manajemen Berita</h2>

        <!-- TABEL BERITA -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-3 text-center">No</th>
                        <th class="px-4 py-3 text-left">Judul</th>
                        <th class="px-4 py-3 text-left">Caption</th>
                        <th class="px-4 py-3 text-center">Foto</th>
                        <th class="px-4 py-3 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-center"><?= $no++ ?></td>
                        <td class="px-4 py-3 font-medium text-gray-800">
                            <?= $data['judul'] ?>
                        </td>
                        <td class="px-4 py-3 text-gray-600">
                            <?= $data['caption'] ?>
                        </td>
                        <td class="px-4 py-3 text-center">
                            <img class="w-24 h-16 object-cover rounded-md mx-auto"
                                src="../upload/berita/<?= $data['foto'] ?>">
                        </td>
                        <td class="px-4 py-3 text-center">
                            <a href="hapus_berita.php?id=<?= $data['id'] ?>"
                                onclick="return confirm('Yakin ingin menghapus berita ini?')"
                                class="inline-block bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded-md transition">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- FORM TAMBAH BERITA -->
        <div class="mt-10 border-t pt-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">➕ Tambah Berita</h3>

            <form action="simpan_berita.php" method="POST" enctype="multipart/form-data" class="space-y-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Judul</label>
                    <input type="text" name="judul" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Caption</label>
                    <textarea name="caption" rows="4" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Foto</label>
                    <input type="file" name="foto" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-white">
                </div>

                <button type="submit" name="simpan"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition">
                    Simpan Berita
                </button>
            </form>
        </div>

    </div>

</body>

</html>