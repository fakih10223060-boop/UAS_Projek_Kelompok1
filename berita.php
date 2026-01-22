<?php
$conn = mysqli_connect("localhost", "root", "", "panti_admin");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$query = "SELECT * FROM berita_terbaru ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Berita Terbaru | Aksi Nyata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-2">
                    <img src="asset/logo/logo1.jpeg" alt="#" class="h-8" />
                    <span class="font-bold text-gray-800 uppercase">Aksi Nyata</span>
                </div>

                <div class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="index.php" class="text-blue-600 font-bold">Beranda</a>
                    <a href="program.php" class="text-gray-600 hover:text-blue-600 transition">Program Unggulan</a>
                    <a href="berita.php" class="text-gray-600 hover:text-blue-600 transition">Berita Terbaru</a>
                    <a href="kalkulator.php" class="text-gray-600 hover:text-blue-600 transition">Kalkulator Zakat</a>
                    <a href="tentang.php" class="text-gray-600 hover:text-blue-600 transition">Tentang Kami</a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="form_donasi.php"
                        class="bg-green-500 hover:bg-green-600 text-white text-xs md:text-sm font-semibold px-5 py-2.5 rounded-md transition">
                        DONASI SEKARANG
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="max-w-3xl mx-auto px-4 py-12 space-y-14">

        <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>

        <article class="bg-white rounded-2xl shadow-sm p-6">
            <h2 class="text-2xl md:text-3xl font-bold mb-2">
                <?= htmlspecialchars($row['judul']) ?>
            </h2>

            <div class="text-xs text-gray-500 mb-4">
                <?= date('d F Y', strtotime($row['tanggal'])) ?> |
                Oleh <?= htmlspecialchars($row['penulis']) ?>
            </div>

            <div class="overflow-hidden rounded-xl mb-4">
                <img src="asset/galeri/<?= htmlspecialchars($row['gambar']) ?>"
                    class="w-full h-64 object-cover hover:scale-105 transition">
            </div>

            <div class="border-l-4 border-teal-500 pl-4  text-gray-600 leading-relaxed">
                <?= nl2br(htmlspecialchars($row['isi_berita'])) ?>
            </div>

        </article>

        <?php endwhile; ?>
        <?php else: ?>

        <div class="bg-white p-10 text-center rounded-xl shadow">
            <p class="text-gray-500">Belum ada berita yang dipublikasikan.</p>
        </div>

        <?php endif; ?>

    </main>

    <footer class="bg-blue-50 text-gray-700 border-t border-blue-100">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div>
                    <h3 class="font-bold mb-4 text-blue-900">Tentang Kami</h3>
                    <p class="text-sm leading-relaxed">
                        LAZNAS & Panti Yatim berkomitmen untuk menyalurkan amanah donasi Anda dengan
                        transparan
                        dan
                        efektif demi masa depan anak-anak yang lebih baik.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold mb-4 text-blue-900">Kontak</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Jl. Ophir II No. 6A, Kebayoran Baru, Jakarta Selatan</li>
                        <li>Email: <a href="mailto:info@aksinyata.org"
                                class="text-blue-600 hover:underline">info@aksinyata.org</a></li>
                        <li>Telp: 0877-1199-9023</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold mb-4 text-blue-900">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="program.php" class="hover:text-blue-600">Program Kami</a></li>
                        <li><a href="berita.php" class="hover:text-blue-600">Berita & Acara</a></li>
                        <li><a href="kalkulator.php" class="hover:text-blue-600">Kalkulator Zakat</a></li>
                        <li><a href="#" class="hover:text-blue-600">Legalitas & Privasi</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold mb-4 text-blue-900">Sosial Media</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600">Instagram</a>
                        <a href="#" class="text-gray-600 hover:text-blue-600">Facebook</a>
                        <a href="#" class="text-gray-600 hover:text-blue-600">YouTube</a>
                    </div>
                </div>
            </div>

            <hr class="my-8 border-blue-200">
            <p class="text-center text-xs text-blue-700 font-medium">
                © 2025 LAZNAS & Panti Yatim. All rights reserved.
            </p>
        </div>
    </footer>

</body>

</html>