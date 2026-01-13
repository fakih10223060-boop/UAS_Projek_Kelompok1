<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kalkulator Zakat - Aksi Nyata Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <style>
    body {
        font-family: "Inter", sans-serif;
    }
    </style>
</head>

<body class="bg-gray-50 text-gray-700">
    <!-- NAVBAR -->
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
                    <a href="berita.hp" class="text-gray-600 hover:text-blue-600">Berita Terbaru</a>
                    <a href="kalkulator.php" class="text-gray-600 hover:text-blue-600">Kalkulator Zakat</a>
                    <a href="tentang.php" class="text-gray-600 hover:text-blue-600">Tentang Kami</a>
                </div>

                <!-- Button -->
                <div class="flex items-center gap-4">
                    <a href="#"
                        class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-5 py-3 rounded-md transition">
                        DONASI SEKARANG
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-12 max-w-4xl">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Kalkulator Zakat</h1>
            <p class="text-gray-500">
                Hitung kewajiban zakat Anda dengan mudah dan akurat sesuai syariat
                Islam.
            </p>
        </div>
        <div class="flex flex-wrap justify-center gap-3 mb-10">
            <button class="px-6 py-2 rounded-full bg-blue-700 text-white font-medium">
                Zakat Profesi
            </button>
            <button class="px-6 py-2 rounded-full border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                Zakat Maal
            </button>
            <button class="px-6 py-2 rounded-full border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                Zakat Fitrah
            </button>
            <button class="px-6 py-2 rounded-full border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                Zakat Pertanian
            </button>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
            <h2 class="text-xl font-bold mb-6 text-gray-800">
                Hitung Zakat Profesi Anda
            </h2>

            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">Penghasilan Bruto per Bulan</label>
                    <div class="relative">
                        <span class="absolute left-4 top-3 text-gray-400">Rp</span>
                        <input type="number"
                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="12000000" />
                    </div>
                    <p class="text-xs text-gray-400 mt-1 italic">
                        Termasuk gaji, tunjangan, dan bonus.
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">Pengeluaran Rutin per Bulan</label>
                    <div class="relative">
                        <span class="absolute left-4 top-3 text-gray-400">Rp</span>
                        <input type="number"
                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="4500000" />
                    </div>
                    <p class="text-xs text-gray-400 mt-1 italic">
                        Kebutuhan pokok seperti makan, transportasi, pendidikan, dll.
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">Cicilan Utang/Kewajiban Lain per Bulan</label>
                    <div class="relative">
                        <span class="absolute left-4 top-3 text-gray-400">Rp</span>
                        <input type="number"
                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="1000000" />
                    </div>
                    <p class="text-xs text-gray-400 mt-1 italic">
                        Cicilan atau kewajiban finansial lainnya.
                    </p>
                </div>
            </div>
            <hr class="my-8" />
            <div class="text-xs text-gray-600 space-y-2 mb-8 leading-relaxed">
                <p>
                    Nishab Zakat Profesi setara 85 gram emas. (Asumsi harga emas Rp
                    77.000/gram, nishab: Rp 6.545.000,-)
                </p>
                <p>
                    Zakat wajib dikeluarkan jika penghasilan bersih (setelah dikurangi
                    pengeluaran rutin dan utang) telah mencapai nishab dan haul (1
                    tahun).
                </p>
            </div>
            <div class="flex justify-between items-center py-4 px-6 bg-blue-50 rounded-lg mb-6">
                <span class="font-bold text-gray-700">Total Zakat yang Harus Dibayar:</span>
                <span class="text-xl font-bold text-blue-700">Rp 0</span>
            </div>
            <button class="w-full bg-green-500 text-white py-4 rounded-lg font-bold hover:bg-green-600 transition">
                BAYAR ZAKAT SEKARANG
            </button>
        </div>
    </main>
    <footer class="bg-blue-50 text-gray-700">
        <div class="max-w-7xl mx-auto px-6 py-12">

            <!-- Grid Utama -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Deskripsi -->
                <div>
                    <p class="text-sm leading-relaxed">
                        LAZNAS & Panti Yatim berkomitmen untuk menyalurkan amanah donasi Anda
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
                        <li><a href="#" class="hover:text-blue-600">Kalkulator Zakat</a></li>
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
                    </ul>
                </div>

            </div>

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

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>