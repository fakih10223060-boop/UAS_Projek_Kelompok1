<?php
include 'config/koneksi.php';

if (!isset($_GET['id'])) {
    echo 'Program tidak ditemukan';
    exit;
}

$id = intval($_GET['id']);
$query = mysqli_query($conn, "SELECT * FROM program WHERE id='$id'");
$program = mysqli_fetch_assoc($query);

if (!$program) {
    echo 'Program tidak ditemukan';
    exit;
}

$target = $program['target_dana'];
$terkumpul = $program['dana_terkumpul'];
$persen = $target > 0 ? min(100, ($terkumpul / $target) * 100) : 0;
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi - Aksi Nyata Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<nav class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-2">
                <img src="asset/logo/logo1.jpeg" alt="#" class="h-8" />
                <span class="font-bold text-gray-800 uppercase">Aksi Nyata</span>
            </div>

            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="index.php" class="text-gray-600 hover:text-blue-600 transition">Beranda</a>
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

<div class="max-w-7xl mx-auto px-4 py-12">

    <!-- Breadcrumb --

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        <!-- Konten Program -->
    <div class="lg:col-span-2 bg-white rounded-2xl border shadow-sm overflow-hidden">

        <!-- Gambar -->
        <div class="relative">
            <img src="asset/galeri/<?= htmlspecialchars($program['gambar']) ?>"
                alt="<?= htmlspecialchars($program['judul']) ?>" class="w-full h-[380px] object-cover">

            <span class="absolute top-4 left-4 px-4 py-1.5 rounded-full text-xs font-semibold
                    <?= $program['status'] === 'aktif'
                        ? 'bg-green-100 text-green-700'
                        : 'bg-gray-200 text-gray-600' ?>">
                <?= ucfirst($program['status']) ?>
            </span>
        </div>

        <!-- Konten -->
        <div class="p-8 space-y-6">
            <h1 class="text-3xl font-bold text-gray-800 leading-tight">
                <?= htmlspecialchars($program['judul']) ?>
            </h1>

            <p class="text-gray-600 leading-relaxed text-base">
                <?= nl2br(htmlspecialchars($program['deskripsi'])) ?>
            </p>
        </div>
    </div>

    <!-- Sidebar Donasi -->
    <aside class="bg-white rounded-2xl border shadow-sm p-6 space-y-6 h-fit sticky top-8">

        <!-- Dana -->
        <div>
            <p class="text-sm text-gray-500 mb-1">Dana Terkumpul</p>
            <p class="text-2xl font-bold text-gray-800">
                Rp <?= number_format($terkumpul, 0, ',', '.') ?>
            </p>
        </div>

        <!-- Progress -->
        <div class="space-y-2">
            <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                <div class="bg-blue-600 h-3 rounded-full transition-all duration-700" style="width: <?= $persen ?>%">
                </div>
            </div>

            <div class="flex justify-between text-xs text-gray-500">
                <span><?= number_format($persen, 1) ?>% tercapai</span>
                <span>Target Rp <?= number_format($target, 0, ',', '.') ?></span>
            </div>
        </div>

        <!-- CTA -->
        <a href="form_donasi.php" class="block w-full text-center py-3 rounded-xl
                      bg-gradient-to-r from-green-600 to-green-500
                      text-white font-semibold text-lg
                      hover:from-green-700 hover:to-green-600
                      transition shadow-md">
            Donasi Sekarang
        </a>

        <p class="text-xs text-center text-gray-400">
            100% donasi disalurkan kepada penerima manfaat
        </p>
    </aside>
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
                        <a href="https://api.whatsapp.com/send?phone=+6283839421020&text=assalamu'alikum"
                            class="text-gray-600 hover:text-blue-600">Telpon: 083839421020</a>
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
                        <a href="https://www.instagram.com/aksinyata_foundation?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            class="text-gray-600 hover:text-blue-600">Instagram</a>
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

</div>
</div>