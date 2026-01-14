<?php
include 'config/panti_admin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<<<<<<< HEAD <body class="bg-gray-100">

    =======

    <body class="bg-grey-100">
        >>>>>>> 63c3877074a519eb69ed95c735c6502c9f13d074
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
                        <a href="index.php" class="text-blue-600">Beranda</a>
                        <a href="program.php" class="text-gray-600 hover:text-blue-600">Program Unggulan</a>
                        <<<<<<< HEAD=======<a href="berita.php" class="text-gray-600 hover:text-blue-600">Berita
                            Terbaru</a>
                            >>>>>>> 63c3877074a519eb69ed95c735c6502c9f13d074
                            <a href="kalkulator.php" class="text-gray-600 hover:text-blue-600">Kalkulator Zakat</a>
                            <a href="tentang.php" class="text-gray-600 hover:text-blue-600">Tentang Kami</a>
                    </div>

                    <!-- Button -->
                    <div>
                        <a href="donasi.php"
                            class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-5 py-2 rounded-md transition">
                            DONASI SEKARANG
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <<<<<<< HEAD <!-- Banner -->
            <section class="relative">
                <img src="asset/galeri/bander.jpeg" alt="Donasi Pendidikan" class="w-full h-[420px] object-cover" />
            </section>

            <!-- Konten -->
            <section class="max-w-5xl mx-auto px-6 py-12">

                <!-- DETAIL PROGRAM -->
                <h2 class="text-2xl font-bold mb-6 text-center">Detail Program</h2>

                <div class="space-y-8 text-gray-700 leading-relaxed">
                    <div>
                        <h3 class="font-semibold text-lg mb-2">
                            Masa Depan Cerah untuk Generasi Penerus
                        </h3>
                        <p>
                            Pendidikan adalah kunci untuk membuka pintu masa depan yang lebih baik.
                            Program ini hadir untuk membantu anak-anak yatim dan dhuafa mendapatkan
                            pendidikan yang layak dan berkelanjutan.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg mb-2">
                            Dampak Donasi Anda
                        </h3>
                        <p>
                            Donasi Anda digunakan untuk biaya pendidikan, perlengkapan sekolah,
                            dan pendampingan belajar agar mereka dapat berkembang secara optimal.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg mb-2">
                            Bagaimana Program Ini Berjalan?
                        </h3>
                        <p>
                            Program dijalankan dengan sistem pendampingan dan pelaporan berkala
                            sebagai bentuk transparansi kepada para donatur.
                        </p>
                    </div>
                </div>

                <!-- GALERI DINAMIS -->
                <h2 class="text-2xl font-bold mt-16 mb-6 text-center">
                    Galeri Kegiatan
                </h2>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <?php
            $galeri = mysqli_query($conn, "SELECT * FROM galeri WHERE status='aktif' ORDER BY id DESC");
            while ($g = mysqli_fetch_assoc($galeri)) {
            ?>
                    <img src="asset/galeri/<?= $g['foto']; ?>"
                        class="rounded-xl object-cover w-full h-48 hover:scale-105 transition duration-300"
                        alt="Galeri">
                    <?php } ?>
                </div>

            </section>

            <!-- Footer -->
            <footer class="bg-blue-50 text-blue-900">
                <div class="max-w-7xl mx-auto px-6 py-14">

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

                        <div>
                            <p class="text-sm leading-relaxed text-blue-800">
                                LAZNAS & Panti Yatim berkomitmen menyalurkan donasi secara transparan
                                dan tepat sasaran.
                                =======
                            <section class="relative">
                                <img src="asset/galeri/bander.jpeg" alt="Donasi Pendidikan"
                                    class="w-full h-[420px] object-cover" />

                                <section class="max-w-5xl mx-auto px-6 py-12">

                                    <!-- DETAIL PROGRAM -->
                                    <h2 class="text-2xl font-bold mb-6 text-center">
                                        Detail Program
                                    </h2>

                                    <div class="space-y-8 text-gray-700 leading-relaxed">

                                        <div>
                                            <h3 class="font-semibold text-lg mb-2">
                                                Masa Depan Cerah untuk Generasi Penerus
                                            </h3>
                                            <p>
                                                Pendidikan adalah kunci untuk membuka pintu masa depan yang lebih baik.
                                                Bagi anak-anak yatim dan dhuafa, akses terhadap pendidikan seringkali
                                                terhambat oleh keterbatasan finansial. Program Beasiswa Yatim dan Dhuafa
                                                hadir untuk memastikan bahwa setiap anak memiliki kesempatan yang sama
                                                untuk meraih impian dan potensi terbaik mereka. Melalui program ini,
                                                kami
                                                menyediakan bantuan biaya pendidikan, perlengkapan sekolah, serta
                                                dukungan mentoring agar mereka dapat belajar dengan tenang dan fokus.
                                                >>>>>>> 63c3877074a519eb69ed95c735c6502c9f13d074
                                            </p>
                                        </div>

                                        <div>
                                            <<<<<<< HEAD <h3 class="font-semibold mb-4">Kontak</h3>
                                                <ul class="text-sm space-y-2 text-blue-800">
                                                    <li>Jl. Raya Condet No. 12</li>
                                                    <li>info@laznas.org</li>
                                                    <li>+62 812 3456 7890</li>
                                                </ul>
                                        </div>

                                        <div>
                                            <h3 class="font-semibold mb-4">Tautan Cepat</h3>
                                            <ul class="text-sm space-y-2 text-blue-800">
                                                <li><a href="#" class="hover:underline">Program Kami</a></li>
                                                <li><a href="#" class="hover:underline">Kalkulator Zakat</a></li>
                                                <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                                            </ul>
                                        </div>

                                        <div>
                                            <h3 class="font-semibold mb-4">Sosial Media</h3>
                                            <ul class="text-sm space-y-2 text-blue-800">
                                                <li>Instagram</li>
                                                <li>Facebook</li>
                                                <li>YouTube</li>
                                                =======
                                                <h3 class="font-semibold text-lg mb-2">
                                                    Dampak Donasi Anda
                                                </h3>
                                                <p>
                                                    Setiap rupiah donasi Anda akan langsung disalurkan untuk kebutuhan
                                                    pendidikan mereka. Ini mencakup biaya SPP, buku pelajaran, seragam,
                                                    transportasi, hingga bimbingan belajar tambahan. Dengan pendidikan
                                                    yang
                                                    layak, anak-anak ini tidak hanya akan meningkatkan kualitas hidup
                                                    mereka
                                                    sendiri, tetapi juga menjadi agen perubahan positif di masyarakat.
                                                    Mari
                                                    bersama-sama kita wujudkan harapan mereka untuk masa depan yang
                                                    lebih
                                                    cerah dan mandiri.
                                                </p>
                                        </div>

                                        <div>
                                            <h3 class="font-semibold text-lg mb-2">
                                                Bagaimana Program Ini Berjalan?
                                            </h3>
                                            <p>
                                                Kami bekerja sama dengan sekolah-sekolah dan komunitas lokal untuk
                                                mengidentifikasi anak-anak yang paling membutuhkan. Setelah melalui
                                                proses seleksi yang ketat, para penerima beasiswa akan didampingi oleh
                                                tim pendamping kami. Laporan progres akademik dan kegiatan akan
                                                disampaikan kepada para donatur secara berkala sebagai bentuk
                                                transparansi dan akuntabilitas. Bergabunglah dengan kami untuk
                                                menciptakan gelombang kebaikan melalui pendidikan!
                                            </p>
                                        </div>

                                    </div>

                                    <!-- GALERI -->
                                    <h2 class="text-2xl font-bold mt-16 mb-6 text-center">Galeri Kegiatan</h2>

                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                        <img src="asset/galeri/program1.jpeg"
                                            class="rounded-xl object-cover w-full h-48" alt="">
                                        <img src="asset/galeri/program2.jpeg"
                                            class="rounded-xl object-cover w-full h-48" alt="">
                                        <img src="asset/galeri/program3.jpeg"
                                            class="rounded-xl object-cover w-full h-48" alt="">
                                        <img src="asset/galeri/program4.jpeg"
                                            class="rounded-xl object-cover w-full h-48" alt="">
                                        <img src="asset/galeri/program5.jpeg"
                                            class="rounded-xl object-cover w-full h-48" alt="">
                                        <img src="asset/galeri/program6.jpeg"
                                            class="rounded-xl object-cover w-full h-48" alt="">
                                    </div>
                                </section>


                                <footer class="bg-blue-50 text-gray-700">
                                    <div class="max-w-7xl mx-auto px-6 py-12">

                                        <!-- Grid Utama -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                                            <!-- Deskripsi -->
                                            <div>
                                                <p class="text-sm leading-relaxed">
                                                    LAZNAS & Panti Yatim berkomitmen untuk menyalurkan amanah donasi
                                                    Anda
                                                    dengan transparan dan efektif.
                                                </p>
                                            </div>

                                            <!-- Kontak -->
                                            <div>
                                                <h3 class="font-semibold mb-4">Kontak</h3>
                                                <ul class="space-y-2 text-sm">
                                                    <li>Jl. Ophir II No. 6A RT 007/RW 001, Kelurahan
                                                        Gunung, Kecamatan Kebayoran Baru, Jakarta Selatan</li>
                                                    <li>
                                                        <a href="mailto:info@aksinyata.org" class="hover:text-blue-600">
                                                            info@aksinyata.org
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="tel:+6281234567890" class="hover:text-blue-600">
                                                            0877-1199-9023
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Tautan Cepat -->
                                            <div>
                                                <h3 class="font-semibold mb-4">Tautan Cepat</h3>
                                                <ul class="space-y-2 text-sm">
                                                    <li><a href="#" class="hover:text-blue-600">Program Kami</a></li>
                                                    <li><a href="#" class="hover:text-blue-600">Berita & Acara</a></li>
                                                    <li><a href="#" class="hover:text-blue-600">Kalkulator Zakat</a>
                                                    </li>
                                                    <li><a href="#" class="hover:text-blue-600">Tentang Kami</a></li>
                                                    <li><a href="#" class="hover:text-blue-600">FAQ</a></li>
                                                </ul>
                                            </div>

                                            <!-- Sosial Media -->
                                            <div>
                                                <h3 class="font-semibold mb-4">Sosial Media</h3>
                                                <ul class="space-y-2 text-sm">
                                                    <li><a href="#" class="hover:text-blue-600">Facebook</a></li>
                                                    <li><a href="#" class="hover:text-blue-600">Instagram</a></li>
                                                    <li><a href="#" class="hover:text-blue-600">Twitter</a></li>
                                                    <li><a href="#" class="hover:text-blue-600">Youtube</a></li>
                                                    >>>>>>> 63c3877074a519eb69ed95c735c6502c9f13d074
                                                </ul>
                                            </div>

                                        </div>

                                        <<<<<<< HEAD <hr class="my-8 border-blue-200">

                                            <p class="text-center text-xs text-blue-700">
                                                © 2025 LAZNAS & Panti Yatim. All rights reserved.
                                            </p>

                                    </div>
                                </footer>

                                =======
                                <!-- Legalitas -->
                                <div class="mt-10">
                                    <h3 class="font-semibold mb-3">Legalitas</h3>
                                    <ul class="space-y-2 text-sm">
                                        <li><a href="#" class="hover:text-blue-600">Kebijakan Privasi</a></li>
                                        <li><a href="#" class="hover:text-blue-600">Syarat & Ketentuan</a></li>
                                        <li><a href="#" class="hover:text-blue-600">Transparansi</a></li>
                                    </ul>
                                </div>

                                <!-- Divider -->
                                <div class="border-t border-gray-300 mt-8 pt-6 text-center text-sm text-gray-500">
                                    © 2025 LAZNAS & Panti Yatim. All rights reserved.
                                </div>

                        </div>
            </footer>
            >>>>>>> 63c3877074a519eb69ed95c735c6502c9f13d074
    </body>

</html>