<?php
$hargaEmas  = 1200000; // Harga per gram
$hargaPerak = 14000;   // Harga per gram
$nishabEmas = 85;      // Gram
$totalNishab = $hargaEmas * $nishabEmas;
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkah Amal - Kalkulator Zakat</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] { -moz-appearance: textfield; }

        /* Style Tab Aktif - Mirip tombol Donasi */
        .active-tab {
            background-color: #10b981 !important; /* emerald-500 */
            color: white !important;
            font-weight: 700;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen text-gray-800">

    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-2">
                    <img src="asset/logo/logo1.jpeg" alt="Logo" class="h-8">
                    <span class="font-bold text-gray-800 uppercase tracking-wider">Aksi Nyata</span>
                </div>

                <div class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="index.php" class="text-gray-600 hover:text-blue-600 transition">Beranda</a>
                    <a href="program.php" class="text-gray-600 hover:text-blue-600 transition">Program</a>
                    <a href="berita.php" class="text-gray-600 hover:text-blue-600 transition">Berita</a>
                    <a href="kalkulator.php" class="text-blue-600">Kalkulator Zakat</a>
                    <a href="tentang.php" class="text-gray-600 hover:text-blue-600 transition">Tentang Kami</a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="donasi.php" class="bg-emerald-500 hover:bg-emerald-600 text-white text-xs md:text-sm font-semibold px-5 py-2.5 rounded-md transition shadow-sm">
                        DONASI SEKARANG
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow py-12 px-4">
        <div class="max-w-3xl mx-auto text-center mb-10">
            <h1 class="text-3xl font-extrabold text-gray-900 mb-3">Kalkulator Zakat</h1>
            <p class="text-gray-500">Hitung kewajiban zakat Anda dengan cepat, mudah, dan transparan.</p>
        </div>

        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <div class="grid grid-cols-3 p-2 gap-2 bg-gray-100 border-b border-gray-200">
                <button onclick="switchTab('maal')" id="tab-maal" class="active-tab py-3 text-sm md:text-base rounded-xl transition-all duration-300 uppercase tracking-wider font-semibold">
                    Zakat Maal
                </button>
                <button onclick="switchTab('profesi')" id="tab-profesi" class="py-3 text-sm md:text-base rounded-xl transition-all duration-300 uppercase tracking-wider font-semibold text-gray-500 hover:bg-white hover:text-emerald-600">
                    Zakat Profesi
                </button>
                <button onclick="switchTab('fitrah')" id="tab-fitrah" class="py-3 text-sm md:text-base rounded-xl transition-all duration-300 uppercase tracking-wider font-semibold text-gray-500 hover:bg-white hover:text-emerald-600">
                    Zakat Fitrah
                </button>
            </div>

            <div class="p-8 md:p-10">
                <div id="content-maal" class="space-y-6">
                    <div>
                        <h2 class="text-xl font-bold">Zakat Maal (Harta)</h2>
                        <p class="text-sm text-gray-400">Dihitung dari total harta yang sudah mengendap selama 1 tahun (haul).</p>
                    </div>

                    <div class="grid gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                            <label class="text-sm font-medium">Emas (gram)</label>
                            <input type="number" id="inputEmas" class="md:col-span-2 bg-gray-50 border border-gray-200 rounded-lg p-3 text-right focus:ring-2 focus:ring-emerald-500 outline-none" placeholder="0">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                            <label class="text-sm font-medium">Tabungan / Kas</label>
                            <div class="md:col-span-2 relative">
                                <span class="absolute left-3 top-3 text-gray-400 text-sm">Rp</span>
                                <input type="number" id="inputUang" class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 pl-10 text-right focus:ring-2 focus:ring-emerald-500 outline-none" placeholder="0">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4 border-t pt-4">
                            <label class="text-sm font-medium text-red-600">Utang Pribadi</label>
                            <div class="md:col-span-2 relative">
                                <span class="absolute left-3 top-3 text-gray-400 text-sm">Rp</span>
                                <input type="number" id="inputUtang" class="w-full bg-red-50 border border-red-100 rounded-lg p-3 pl-10 text-right focus:ring-2 focus:ring-red-500 outline-none" placeholder="0">
                            </div>
                        </div>
                    </div>

                    <div class="bg-emerald-50 p-6 rounded-xl text-center">
                        <span class="text-xs uppercase tracking-widest text-emerald-600 font-bold">Total Wajib Bayar</span>
                        <h3 class="text-4xl font-black text-emerald-700 mt-1" id="hasilMaal">Rp 0</h3>
                        <p id="statusMaal" class="text-xs text-gray-500 mt-2 italic font-medium"></p>
                    </div>
                </div>

                <div id="content-profesi" class="hidden space-y-6">
                    <h2 class="text-xl font-bold">Zakat Profesi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                        <label class="text-sm font-medium">Penghasilan Bulanan</label>
                        <div class="md:col-span-2 relative">
                            <span class="absolute left-3 top-3 text-gray-400 text-sm">Rp</span>
                            <input type="number" id="inputGaji" class="w-full bg-gray-50 border border-gray-200 rounded-lg p-3 pl-10 text-right focus:ring-2 focus:ring-emerald-500 outline-none" placeholder="0">
                        </div>
                    </div>
                    <div class="bg-emerald-50 p-6 rounded-xl text-center">
                        <h3 class="text-4xl font-black text-emerald-700" id="hasilProfesi">Rp 0</h3>
                    </div>
                </div>

                <div id="content-fitrah" class="hidden space-y-6">
                    <h2 class="text-xl font-bold">Zakat Fitrah</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                        <label class="text-sm font-medium">Jumlah Anggota Keluarga</label>
                        <input type="number" id="inputJiwa" value="1" class="md:col-span-2 bg-gray-50 border border-gray-200 rounded-lg p-3 text-right focus:ring-2 focus:ring-emerald-500 outline-none">
                    </div>
                    <div class="bg-emerald-50 p-6 rounded-xl text-center">
                        <h3 class="text-4xl font-black text-emerald-700" id="hasilFitrah">Rp 45.000</h3>
                    </div>
                </div>

                <button class="w-full mt-8 bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-4 rounded-xl transition transform hover:scale-[1.01] active:scale-95 shadow-lg">
                    BAYAR SEKARANG
                </button>
            </div>
        </div>
    </main>

    <footer class="bg-blue-50 text-gray-700">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <p class="text-sm leading-relaxed">
                        LAZNAS & Panti Yatim berkomitmen untuk menyalurkan amanah donasi Anda dengan transparan dan
                        efektif.
                    </p>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Jl. Ophir II No. 6A RT 007/RW 001, Kelurahan Gunung, Kecamatan Kebayoran Baru, Jakarta
                            Selatan</li>
                        <li>
                            <a href="mailto:info@aksinyata.org" class="hover:text-blue-600">
                                info@aksinyata.org
                            </a>
                        </li>
                        <li>
                            <a href="tel:087711999023" class="hover:text-blue-600">
                                0877-1199-9023
                            </a>
                        </li>
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

            <div class="mt-10">
                <h3 class="font-semibold mb-3">Legalitas</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-600">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-blue-600">Syarat & Ketentuan</a></li>
                    <li><a href="#" class="hover:text-blue-600">Transparansi</a></li>
                </ul>
            </div>

            <div class="border-t border-gray-300 mt-8 pt-6 text-center text-sm text-gray-500">
                © 2025 LAZNAS & Panti Yatim. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        const HARGA_EMAS = <?php echo $hargaEmas; ?>;
        const NISHAB_MAAL = <?php echo $totalNishab; ?>;

        function formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(angka);
        }

        function switchTab(tab) {
            const tabs = ['maal', 'profesi', 'fitrah'];
            tabs.forEach(t => {
                const content = document.getElementById('content-' + t);
                const btn = document.getElementById('tab-' + t);
                
                content.classList.add('hidden');
                // Reset ke style default (bukan aktif)
                btn.className = "py-3 text-sm md:text-base rounded-xl transition-all duration-300 uppercase tracking-wider font-semibold text-gray-500 hover:bg-white hover:text-emerald-600";
            });

            document.getElementById('content-' + tab).classList.remove('hidden');
            // Tambahkan class aktif
            document.getElementById('tab-' + tab).className = "active-tab py-3 text-sm md:text-base rounded-xl transition-all duration-300 uppercase tracking-wider font-semibold";
        }

        function hitung() {
            let emas = (parseFloat(document.getElementById('inputEmas').value) || 0) * HARGA_EMAS;
            let uang = parseFloat(document.getElementById('inputUang').value) || 0;
            let utang = parseFloat(document.getElementById('inputUtang').value) || 0;
            let totalHarta = emas + uang - utang;
            
            let zakatMaal = totalHarta >= NISHAB_MAAL ? totalHarta * 0.025 : 0;
            document.getElementById('hasilMaal').innerText = formatRupiah(zakatMaal);
            document.getElementById('statusMaal').innerText = totalHarta < NISHAB_MAAL ? "Harta belum mencapai nishab (" + formatRupiah(NISHAB_MAAL) + ")" : "";

            let gaji = parseFloat(document.getElementById('inputGaji').value) || 0;
            document.getElementById('hasilProfesi').innerText = formatRupiah(gaji * 0.025);

            let jiwa = parseFloat(document.getElementById('inputJiwa').value) || 0;
            document.getElementById('hasilFitrah').innerText = formatRupiah(jiwa * 45000);
        }

        document.querySelectorAll('input').forEach(input => input.addEventListener('input', hitung));
    </script>
</body>
</html>