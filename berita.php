<?php
// 1. Pengaturan Koneksi Database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'panti_admin';  // Nama database sesuai gambar phpMyAdmin

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi untuk mencegah Fatal Error
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// 2. Query mengambil data dari tabel galeri
$query = 'SELECT * FROM galeri ORDER BY id DESC';
$result = mysqli_query($conn, $query);

// Validasi hasil query agar tidak TypeError di baris mysqli_fetch_assoc
if (!$result) {
    die('Kesalahan Query: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAZNAS Berita - Program Pendidikan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

    body {
        font-family: 'Inter', sans-serif;
    }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <img src="asset/logo/logo1.jpeg" alt="Aksi Nyata Foundation" class="h-8" />
                    <span class="font-bold text-gray-800">AKSI NYATA</span>
                </div>

                <!-- Menu -->
                <div class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="index.php" class="text-gray-600 hover:text-blue-600 transition">Beranda</a>
                    <a href="program.php" class="text-gray-600 hover:text-blue-600 transition">Program Unggulan</a>
                    <a href="berita.php" class="text-blue-600 font-bold">Berita Terbaru</a>
                    <a href="kalkulator.php" class="text-gray-600 hover:text-blue-600 transition">Kalkulator Zakat</a>
                    <a href="tentang.php" class="text-gray-600 hover:text-blue-600 transition">Tentang Kami</a>
                </div>

                <!-- Button -->
                <div>
                    <a href="form_donasi.php"
                        class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-5 py-2 rounded-md transition">
                        DONASI SEKARANG
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 md:px-0 max-w-4xl py-10">
        <nav class="text-sm text-gray-500 mb-6">
            <a href="#" class="hover:underline">Beranda</a> &gt;
            <span class="text-teal-700 font-semibold">Berita Terbaru</span>
        </nav>

        <article class="bg-white rounded-2xl shadow-sm p-8 border border-gray-100">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-4">
                AKSINYATA Berhasil Salurkan Bantuan Pendidikan untuk Ribuan Yatim Dhuafa
            </h1>

            <div class="flex items-center text-gray-500 text-sm mb-8">
                <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full text-xs font-bold mr-3">NEWS</span>
                <span>15 Oktober 2026 | Oleh Tim Redaksi</span>
            </div>

            <img src="asset/galeri/program5.jpeg" alt="Bantuan Pendidikan"
                class="rounded-[2rem] shadow-2xl rotate-2 hover:rotate-0 transition duration-500">

            <div class="prose max-w-none text-gray-700 leading-relaxed text-lg">
                <p class="mb-4">
                    Program bantuan pendidikan ini mencakup berbagai bentuk dukungan, mulai dari beasiswa penuh hingga
                    pengadaan perlengkapan sekolah.
                    Sasaran utama program adalah anak-anak yang berasal dari keluarga kurang mampu yang seringkali
                    terancam putus sekolah.
                </p>
                <p class="mb-4 italic border-l-4 border-teal-500 pl-4 py-2 bg-teal-50">
                    "Pendidikan adalah hak setiap anak. Kami percaya dengan memberikan kesempatan pendidikan yang layak,
                    kita sedang berinvestasi pada masa depan bangsa."
                </p>
            </div>

            <section class="mt-12">
                <h3 class="text-2xl font-bold text-teal-900 mb-6 flex items-center">
                    <span class="w-8 h-1 bg-teal-500 mr-3"></span>
                    Data Galeri Kegiatan
                </h3>

                <div class="grid grid-cols-1 gap-4">
                    <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <div class="bg-gray-50 p-6 rounded-lg border-l-8 border-teal-600 hover:shadow-md transition">
                        <h4 class="font-bold text-lg text-gray-800"><?php echo htmlspecialchars($row['judul']); ?></h4>
                        <p class="text-gray-600 text-sm mt-2">
                            <?php echo htmlspecialchars($row['deskripsi'] ?? 'Kegiatan penyaluran bantuan pendidikan.'); ?>
                        </p>
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <div class="text-center py-10 border-2 border-dashed border-gray-200 rounded-xl">
                        <p class="text-gray-400 italic">Belum ada data galeri kegiatan yang diunggah.</p>
                    </div>
                    <?php endif; ?>
                </div>
            </section>
        </article>
    </main>

    <footer class="bg-blue-50 text-gray-700 border-t border-blue-100">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div>
                    <h3 class="font-bold mb-4 text-blue-900">Tentang Kami</h3>
                    <p class="text-sm leading-relaxed">
                        LAZNAS & Panti Yatim berkomitmen untuk menyalurkan amanah donasi Anda dengan transparan dan
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</body>

</html>