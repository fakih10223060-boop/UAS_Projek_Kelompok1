<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi - Aksi Nyata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-2">
                    <img src="asset/logo/logo1.jpeg" alt="Aksi Nyata Foundation" class="h-8" />
                    <span class="font-bold text-gray-800">AKSI NYATA</span>
                </div>

                <div class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="index.php" class="text-blue-600 hover:text-blue-800">Beranda</a>
                    <a href="program.php" class="text-gray-600 hover:text-blue-600">Program Unggulan</a>
                    <a href="berita.php" class="text-gray-600 hover:text-blue-600">Berita Terbaru</a>
                    <a href="kalkulator.php" class="text-gray-600 hover:text-blue-600">Kalkulator Zakat</a>
                    <a href="tentang.php" class="text-gray-600 hover:text-blue-600">Tentang Kami</a>
                </div>

                <div>
                    <a href="donasi.php"
                        class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-5 py-2 rounded-md transition shadow-md">
                        DONASI SEKARANG
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="relative">
        <img src="asset/galeri/bander.jpeg" alt="Donasi Pendidikan" class="w-full h-[420px] object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg">Mari Berbagi Kebahagiaan</h1>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-12">

        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Detail Program</h2>

        <div class="space-y-8 text-gray-700 leading-relaxed bg-white p-8 rounded-xl shadow-sm">
            <div>
                <h3 class="font-bold text-xl text-blue-900 mb-2">
                    Masa Depan Cerah untuk Generasi Penerus
                </h3>
                <p>
                    Pendidikan adalah kunci untuk membuka pintu masa depan yang lebih baik.
                    Program ini hadir untuk membantu anak-anak yatim dan dhuafa mendapatkan
                    pendidikan yang layak dan berkelanjutan. Bagi mereka, akses terhadap pendidikan seringkali
                    terhambat oleh keterbatasan finansial. Program Beasiswa Yatim dan Dhuafa
                    hadir untuk memastikan bahwa setiap anak memiliki kesempatan yang sama.
                </p>
            </div>

            <div>
                <h3 class="font-bold text-xl text-blue-900 mb-2">
                    Dampak Donasi Anda
                </h3>
                <p>
                    Setiap rupiah donasi Anda akan langsung disalurkan untuk kebutuhan
                    pendidikan mereka. Ini mencakup biaya SPP, buku pelajaran, seragam,
                    transportasi, hingga bimbingan belajar tambahan. Dengan pendidikan yang
                    layak, anak-anak ini tidak hanya akan meningkatkan kualitas hidup
                    mereka sendiri, tetapi juga menjadi agen perubahan positif di masyarakat.
                </p>
            </div>

            <div>
                <h3 class="font-bold text-xl text-blue-900 mb-2">
                    Bagaimana Program Ini Berjalan?
                </h3>
                <p>
                    Kami bekerja sama dengan sekolah-sekolah dan komunitas lokal untuk
                    mengidentifikasi anak-anak yang paling membutuhkan. Program dijalankan dengan sistem pendampingan
                    dan pelaporan berkala
                    sebagai bentuk transparansi kepada para donatur.
                </p>
            </div>
        </div>

        <h2 class="text-3xl font-bold mt-16 mb-8 text-center text-gray-800">
            Galeri Kegiatan
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            // Pastikan koneksi database ($conn) sudah tersedia dari file config
            if (isset($conn)) {
                $galeri = mysqli_query($conn, "SELECT * FROM galeri WHERE status='aktif' ORDER BY id DESC LIMIT 6");
                if (mysqli_num_rows($galeri) > 0) {
                    while ($g = mysqli_fetch_assoc($galeri)) {
                        ?>
            <div class="overflow-hidden rounded-xl shadow-lg group">
                <img src="asset/galeri/<?= $g['foto']; ?>"
                    class="object-cover w-full h-56 transform group-hover:scale-110 transition duration-500"
                    alt="Galeri Kegiatan">
            </div>
            <?php
                    }
                } else {
                    echo '<p class="col-span-3 text-center text-gray-500">Belum ada galeri foto.</p>';
                }
            } else {
                // Fallback jika database error/belum connect (Tampilan statis sementara)
                $static_images = ['program1.jpeg', 'program2.jpeg', 'program3.jpeg'];
                foreach ($static_images as $img) {
                    echo '<img src="asset/galeri/' . $img . '" class="rounded-xl object-cover w-full h-56 bg-gray-200" alt="Static">';
                }
            }
            ?>
        </div>

    </section>

    <footer class="bg-blue-50 text-blue-900 border-t border-blue-100">
        <div class="max-w-7xl mx-auto px-6 py-14">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                <div>
                    <h3 class="font-bold text-lg mb-4 text-blue-800">Tentang Kami</h3>
                    <p class="text-sm leading-relaxed text-gray-600">
                        LAZNAS & Panti Yatim berkomitmen menyalurkan donasi secara transparan
                        dan tepat sasaran untuk membantu sesama yang membutuhkan melalui program pendidikan dan sosial.
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4 text-blue-800">Kontak Kami</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="mr-2">📍</span>
                            <span>Jl. Ophir II No. 6A RT 007/RW 001, Kel. Gunung, Kec. Kebayoran Baru, Jakarta
                                Selatan</span>
                        </li>
                        <li class="flex items-center">
                            <span class="mr-2">📧</span>
                            <a href="mailto:info@aksinyata.org"
                                class="hover:text-blue-600 transition">info@aksinyata.org</a>
                        </li>
                        <li class="flex items-center">
                            <span class="mr-2">📞</span>
                            <a href="tel:+6287711999023" class="hover:text-blue-600 transition">0877-1199-9023</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4 text-blue-800">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><a href="program.php" class="hover:text-blue-600 transition">Program Kami</a></li>
                        <li><a href="berita.php" class="hover:text-blue-600 transition">Berita & Acara</a></li>
                        <li><a href="kalkulator.php" class="hover:text-blue-600 transition">Kalkulator Zakat</a></li>
                        <li><a href="tentang.php" class="hover:text-blue-600 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-blue-600 transition">FAQ</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4 text-blue-800">Sosial Media</h3>
                    <ul class="flex space-x-4 mb-6">
                        <li><a href="#" class="bg-white p-2 rounded-full shadow hover:text-blue-600 transition">FB</a>
                        </li>
                        <li><a href="#" class="bg-white p-2 rounded-full shadow hover:text-pink-600 transition">IG</a>
                        </li>
                        <li><a href="#" class="bg-white p-2 rounded-full shadow hover:text-blue-400 transition">TW</a>
                        </li>
                        <li><a href="#" class="bg-white p-2 rounded-full shadow hover:text-red-600 transition">YT</a>
                        </li>
                    </ul>

                    <h3 class="font-bold text-sm mb-2 text-blue-800">Legalitas</h3>
                    <ul class="space-y-1 text-xs text-gray-500">
                        <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:underline">Syarat & Ketentuan</a></li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-blue-200 mt-10 pt-6 text-center text-sm text-blue-700">
                <p>&copy; 2025 LAZNAS & Panti Yatim Aksi Nyata. All rights reserved.</p>
            </div>

        </div>
    </footer>
</body>

</html>