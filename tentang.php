<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Panti Yatim Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

<nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-2">
                    <img src="asset/logo/logo1.jpeg" alt="logo" class="h-8" />
                    <span class="font-bold text-gray-800 uppercase">Aksi Nyata</span>
                </div>

                <div class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="index.php" class="text-blue-600">Beranda</a>
                    <a href="program.php" class="text-gray-600 hover:text-blue-600">Program Unggulan</a>
                    <a href="kalkulator.php" class="text-gray-600 hover:text-blue-600">Kalkulator Zakat</a>
                    <a href="tentang.php" class="text-gray-600 hover:text-blue-600">Tentang Kami</a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="donasi.php"
                        class="bg-green-500 hover:bg-green-600 text-white text-xs md:text-sm font-semibold px-5 py-2.5 rounded-md transition">
                        DONASI SEKARANG
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ================= CONTENT ================= -->
    <div class="max-w-7xl mx-auto px-6 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- KIRI -->
            <div>
                <h1 class="text-3xl font-bold mb-4">
                    Panti Yatim Indonesia
                </h1>

                <p class="text-gray-600 mb-5">
                    Untuk Informasi Mengenai Panti Yatim Indonesia Silahkan Hubungi :
                </p>

                <p class="mb-3">
                    <span class="font-semibold">Kantor Pusat</span> :
                    Jl. Sayunan Raya I No. 14 Bandung (022) 540 1334
                </p>

                <p class="mb-3">
                    <span class="font-semibold">Kantor Management</span> :
                    Jl. Taman Holis Indah, blok G1 no. 48, Cigondewah Rahayu,
                    Kecamatan Bandung Kulon, Kota Bandung, Jawa Barat 40215
                </p>

                <p class="mb-2">
                    <span class="font-semibold">Call Center</span> :
                    081-2222-44-222
                </p>

                <p class="mb-2">
                    <span class="font-semibold">SMS Center / Whatsapp Center</span> :
                    081-2211-85-555
                </p>

                <p class="mb-4">
                    <span class="font-semibold">Mail Center</span> :
                    mail@pantiyatim.or.id
                </p>

                <h2 class="text-xl font-bold mt-6 mb-2">
                    Mohon Perhatian
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    <span class="font-semibold">Jangan terpengaruh</span> iming-iming donasi
                    dengan cashback atau hadiah. Selalu verifikasi informasi melalui
                    kanal resmi PYI (Call Center & Whatsapp Center PYI).
                    Laporkan jika menemukan indikasi penipuan!
                </p>
            </div>

            <!-- KANAN : MAP -->
            <div class="relative w-full h-[420px] rounded-lg overflow-hidden shadow-lg">

                <!-- GOOGLE MAPS EMBED -->
                <iframe class="w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.469832276409!2d107.568035!3d-6.941255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8c3c2f0d2fb%3A0x4e3cbe6f66efb1d0!2sKantor%20Pelayanan%20Zakat%20%26%20Donasi%20-%20Panti%20Yatim!5e0!3m2!1sid!2sid!4v1700000000000"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <!-- OVERLAY INFO -->
                <div class="absolute top-4 left-4 bg-white p-4 rounded-lg shadow-md w-72">
                    <p class="font-semibold text-sm">
                        Kantor Pelayanan Zakat & Donasi
                    </p>
                    <p class="text-gray-600 text-xs mt-1">
                        Blok G1 No. 48, Kompleks Taman Holis Indah, Cigondewah Rahayu,
                        Kota Bandung, Jawa Barat 40215
                    </p>

                    <div class="flex items-center justify-between mt-3">
                        <p class="text-yellow-500 text-sm font-semibold">
                            ⭐ 5.0
                        </p>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=-6.941255,107.568035"
                            target="_blank" class="text-blue-600 text-xs font-semibold hover:underline">
                            Rute
                        </a>
                    </div>

                    <p class="text-xs text-gray-500 mt-1">
                        26 ulasan
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-blue-50 text-gray-700">
        <div class="max-w-7xl mx-auto px-6 py-12">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div>
                    <p class="text-sm leading-relaxed">
                        LAZNAS & Panti Yatim berkomitmen untuk menyalurkan amanah donasi Anda
                        dengan transparan dan efektif.
                    </p>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Jl. Raya Condet No. 12, Jakarta Timur</li>
                        <li><a href="mailto:info@laznas.org" class="hover:text-blue-600">info@laznas.org</a></li>
                        <li><a href="tel:+6281234567890" class="hover:text-blue-600">+62 812 3456 7890</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-600">Program Kami</a></li>
                        <li><a href="#" class="hover:text-blue-600">Berita & Acara</a></li>
                        <li><a href="#" class="hover:text-blue-600">Kalkulator Zakat</a></li>
                        <li><a href="#" class="hover:text-blue-600">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-blue-600">FAQ</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Sosial Media</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-600">Facebook</a></li>
                        <li><a href="#" class="hover:text-blue-600">Instagram</a></li>
                        <li><a href="#" class="hover:text-blue-600">Twitter</a></li>
                        <li><a href="#" class="hover:text-blue-600">Youtube</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-300 mt-8 pt-6 text-center text-sm text-gray-500">
                © 2025 LAZNAS & Panti Yatim. All rights reserved.
            </div>

        </div>
    </footer>

</body>

</html>