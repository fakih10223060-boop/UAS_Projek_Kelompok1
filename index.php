<?php
include 'config/koneksi.php';

$query = mysqli_query($conn, 'SELECT * FROM berita ORDER BY id DESC');
$data_berita = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi - Aksi Nyata Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
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

    <section class="relative h-[420px] overflow-hidden">
        <img src="asset/galeri/aksinyata1.jpeg" alt="Donasi Pendidikan" class="w-full h-full object-cover" />

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4 max-w-3xl">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 uppercase tracking-wide">
                    Mengubah Niat Baik<br />Menjadi Nyata
                </h1>
                <p class="text-sm md:text-lg mb-6 opacity-90">
                    Setiap donasi Anda adalah harapan baru bagi masa depan anak-anak
                    yatim dan dhuafa. Mari bersama membangun generasi cerdas dan
                    berakhlak mulia.
                </p>
                <a href="form_donasi.php"
                    class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold px-8 py-3 rounded-lg transition transform hover:scale-105">
                    Donasi Pendidikan Sekarang
                </a>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <section class="max-w-6xl mx-auto px-4 relative z-30 -mt-10 mb-16">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 md:p-10">

            <h3 class="text-2xl font-bold text-center text-gray-800 mb-8">Akses Cepat</h3>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <a href="form-donasi.php"
                    class="group flex flex-col items-center gap-4 p-4 rounded-xl hover:bg-green-50 transition duration-300 cursor-pointer">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-3xl shadow-sm group-hover:bg-green-600 group-hover:text-white group-hover:scale-110 transition duration-300">
                        <i class="ph ph-hand-heart"></i>
                    </div>
                    <span class="font-semibold text-gray-700 group-hover:text-green-700 transition">Donasi
                        Sekarang</span>
                </a>

                <a href="kalkulator.php"
                    class="group flex flex-col items-center gap-4 p-4 rounded-xl hover:bg-green-50 transition duration-300 cursor-pointer">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-3xl shadow-sm group-hover:bg-green-600 group-hover:text-white group-hover:scale-110 transition duration-300">
                        <i class="ph ph-calculator"></i>
                    </div>
                    <span class="font-semibold text-gray-700 group-hover:text-green-700 transition">Kalkulator
                        Zakat</span>
                </a>

                <a href="form_donasi.php"
                    class="group flex flex-col items-center gap-4 p-4 rounded-xl hover:bg-green-50 transition duration-300 cursor-pointer">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-3xl shadow-sm group-hover:bg-green-600 group-hover:text-white group-hover:scale-110 transition duration-300">
                        <i class="ph ph-bank"></i>
                    </div>
                    <span class="font-semibold text-gray-700 group-hover:text-green-700 transition">Rekening
                        Donasi</span>
                </a>

                <a href="jemput.php"
                    class="group flex flex-col items-center gap-4 p-4 rounded-xl hover:bg-green-50 transition duration-300 cursor-pointer">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-3xl shadow-sm group-hover:bg-green-600 group-hover:text-white group-hover:scale-110 transition duration-300">
                        <i class="ph ph-truck"></i>
                    </div>
                    <span class="font-semibold text-gray-700 group-hover:text-green-700 transition">Jemput Donasi</span>
                </a>

            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
                <div class="lg:col-span-2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        AKSINYATA Foundation Pakubuwono
                    </h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Kami adalah lembaga amil zakat dan panti asuhan yatim yang
                        berdedikasi untuk meningkatkan kesejahteraan masyarakat melalui
                        program-program pendidikan, kemanusiaan, dan pemberdayaan. Dengan
                        prinsip transparansi dan amanah, kami menyalurkan setiap donasi
                        untuk dampak yang maksimal.
                    </p>

                    <div class="grid grid-cols-4 gap-3">
                        <img src="asset/galeri/kegiatan1.jpeg"
                            class="w-full h-20 object-cover rounded-lg hover:opacity-80 cursor-pointer"
                            alt="Kegiatan 1" />
                        <img src="asset/galeri/kegiatan2.jpeg"
                            class="w-full h-20 object-cover rounded-lg hover:opacity-80 cursor-pointer"
                            alt="Kegiatan 2" />
                        <img src="asset/galeri/kegiatan3.jpeg"
                            class="w-full h-20 object-cover rounded-lg hover:opacity-80 cursor-pointer"
                            alt="Kegiatan 3" />
                        <img src="asset/galeri/kegiatan4.jpeg"
                            class="w-full h-20 object-cover rounded-lg hover:opacity-80 cursor-pointer"
                            alt="Kegiatan 4" />
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-100">
                        <p class="text-blue-600 text-3xl font-bold">250+</p>
                        <p class="text-xs text-gray-600 mt-1 uppercase tracking-wider font-semibold">
                            Anak Terbantu
                        </p>
                    </div>
                    <div class="bg-green-50 rounded-xl p-6 text-center border border-green-100">
                        <p class="text-green-600 text-3xl font-bold">1M+</p>
                        <p class="text-xs text-gray-600 mt-1 uppercase tracking-wider font-semibold">
                            Dana Salur
                        </p>
                    </div>
                    <div class="bg-orange-50 rounded-xl p-6 text-center border border-orange-100">
                        <p class="text-orange-600 text-3xl font-bold">100+</p>
                        <p class="text-xs text-gray-600 mt-1 uppercase tracking-wider font-semibold">
                            Donatur
                        </p>
                    </div>
                    <div class="bg-purple-50 rounded-xl p-6 text-center border border-purple-100">
                        <p class="text-purple-600 text-3xl font-bold">100+</p>
                        <p class="text-xs text-gray-600 mt-1 uppercase tracking-wider font-semibold">
                            Program
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-10 bg-white">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-8">
            Program Unggulan Kami
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="asset/galeri/program1.jpeg" alt="Beasiswa Anak Yatim" class="w-full h-44 object-cover" />
                <div class="p-4 text-center">
                    <h3 class="font-semibold mb-4">Beasiswa Pendidikan Anak Yatim</h3>
                    <a href="programlihatdetail.php"
                        class="inline-block border border-gray-300 px-6 py-2 rounded-md text-sm hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="asset/galeri/program2.jpeg" alt="Bantuan Pangan" class="w-full h-44 object-cover" />
                <div class="p-4 text-center">
                    <h3 class="font-semibold mb-4">Bantuan Pangan Korban Bencana</h3>
                    <a href="#"
                        class="inline-block border border-gray-300 px-6 py-2 rounded-md text-sm hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="asset/galeri/program3.jpeg" alt="Pelatihan Pemuda" class="w-full h-44 object-cover" />
                <div class="p-4 text-center">
                    <h3 class="font-semibold mb-4">
                        Pelatihan Keterampilan Pemuda Dhuafa
                    </h3>
                    <a href="#"
                        class="inline-block border border-gray-300 px-6 py-2 rounded-md text-sm hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="asset/galeri/program4.jpeg" alt="Panti Asuhan" class="w-full h-44 object-cover" />
                <div class="p-4 text-center">
                    <h3 class="font-semibold mb-4">Pembangunan Panti Asuhan Modern</h3>
                    <a href="#"
                        class="inline-block border border-gray-300 px-6 py-2 rounded-md text-sm hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="asset/galeri/program5.jpeg" alt="Peduli Yatim" class="w-full h-44 object-cover" />
                <div class="p-4 text-center">
                    <h3 class="font-semibold mb-4">Peduli Yatim Dhuafa</h3>
                    <a href="#"
                        class="inline-block border border-gray-300 px-6 py-2 rounded-md text-sm hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="asset/galeri/program6.jpeg" alt="Anak Terlantar" class="w-full h-44 object-cover" />
                <div class="p-4 text-center">
                    <h3 class="font-semibold mb-4">Peduli Anak Terlantar</h3>
                    <a href="#"
                        class="inline-block border border-gray-300 px-6 py-2 rounded-md text-sm hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 lg:px-4">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">
                Berita Terbaru
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <?php if (!empty($data_berita)): ?>
                <?php foreach ($data_berita as $berita): ?>

                <a href="detail_berita.php?id=<?= $berita['id'] ?>"
                    class="block bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-500 ease-in-out transform hover:-translate-y-1 overflow-hidden">

                    <img class="w-full h-48 object-cover rounded-t-xl" src="upload/berita/<?= $berita['foto'] ?>"
                        alt="<?= $berita['judul'] ?>">

                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">
                            <?= $berita['judul'] ?>
                        </h3>
                        <p class="text-sm text-gray-600 line-clamp-3">
                            <?= $berita['caption'] ?>
                        </p>
                    </div>
                </a>

                <?php endforeach; ?>
                <?php else: ?>
                <p class="col-span-4 text-center text-gray-600 p-8">
                    Belum ada berita terbaru untuk ditampilkan.
                </p>
                <?php endif; ?>

            </div>
        </div>
    </section>


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

</body>

</html>