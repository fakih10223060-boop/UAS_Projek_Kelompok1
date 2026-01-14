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
    body {
        font-family: 'Inter', sans-serif;
    }

    /* Hapus panah pada input number *
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    </style>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen">

    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-2">
                    <img src="asset/logo/logo1.jpeg" alt="Logo Aksi Nyata" class="h-8">
                    <span class="font-bold text-gray-800 uppercase">Aksi Nyata</span>
                </div>

                <div class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="index.php" class="text-blue-600">Beranda</a>
                    <a href="program.php" class="text-gray-600 hover:text-blue-600">Program Unggulan</a>
                    <a href="berita.php" class="text-gray-600 hover:text-blue-600">Berita Terbaru</a>
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

    <main class="flex-grow py-12 px-4">
        <div class="max-w-3xl mx-auto text-center mb-10">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">Hitung Kewajiban Zakat Anda</h1>
            <p class="text-gray-500 text-sm md:text-base">Gunakan kalkulator ini untuk menghitung kewajiban zakat Anda
                berdasarkan jenis harta atau penghasilan dengan mudah dan akurat.</p>
        </div>

        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">

            <div class="grid grid-cols-3 bg-gray-100 border-b border-gray-200">
                <button onclick="switchTab('maal')" id="tab-maal"
                    class="py-4 text-sm font-bold text-gray-700 bg-white border-t-2 border-emerald-500 transition">
                    Zakat Maal (Harta)
                </button>
                <button onclick="switchTab('profesi')" id="tab-profesi"
                    class="py-4 text-sm font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-50 transition">
                    Zakat Profesi (Penghasilan)
                </button>
                <button onclick="switchTab('fitrah')" id="tab-fitrah"
                    class="py-4 text-sm font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-50 transition">
                    Zakat Fitrah (Diri)
                </button>
            </div>

            <div class="p-8 md:p-12">

                <div id="content-maal" class="block">
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-gray-800">Zakat Maal (Harta)</h2>
                        <p class="text-gray-400 text-xs mt-1">Hitung zakat atas harta kekayaan Anda seperti emas, perak,
                            tabungan, dan investasi.</p>
                    </div>

                    <div class="space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                            <label class="text-sm font-medium text-gray-600">Nilai Emas (gram)</label>
                            <div class="md:col-span-2">
                                <input type="number" id="inputEmas"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-right focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition"
                                    placeholder="0">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                            <label class="text-sm font-medium text-gray-600">Nilai Perak (gram)</label>
                            <div class="md:col-span-2">
                                <input type="number" id="inputPerak"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-right focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition"
                                    placeholder="0">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                            <label class="text-sm font-medium text-gray-600">Saldo Tabungan/Kas</label>
                            <div class="md:col-span-2 relative">
                                <span class="absolute left-4 top-3 text-gray-400 text-sm">Rp</span>
                                <input type="number" id="inputUang"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 pl-10 text-right focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition"
                                    placeholder="0">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                            <label class="text-sm font-medium text-gray-600">Nilai Investasi/Saham</label>
                            <div class="md:col-span-2 relative">
                                <span class="absolute left-4 top-3 text-gray-400 text-sm">Rp</span>
                                <input type="number" id="inputSaham"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 pl-10 text-right focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition"
                                    placeholder="0">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                            <label class="text-sm font-medium text-gray-600">Utang/Kewajiban</label>
                            <div class="md:col-span-2 relative">
                                <span class="absolute left-4 top-3 text-gray-400 text-sm">Rp</span>
                                <input type="number" id="inputUtang"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 pl-10 text-right focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition"
                                    placeholder="0">
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-xs text-gray-500">Nishab Zakat Saat Ini (setara 85 gram emas):</span>
                            <span class="text-sm font-bold text-gray-700" id="displayNishab">Rp 102.000.000</span>
                        </div>

                        <div class="text-center">
                            <p class="text-sm font-semibold text-gray-700 mb-2">Zakat Maal yang Wajib Dibayarkan:</p>
                            <h3 class="text-4xl font-bold text-emerald-500" id="hasilMaal">Rp 0</h3>
                            <p id="statusMaal" class="text-xs text-red-400 mt-2 hidden">Belum mencapai nishab</p>
                        </div>
                    </div>
                </div>
            </div>


                <div id="content-profesi" class="hidden">
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-gray-800">Zakat Profesi</h2>
                        <p class="text-gray-400 text-xs mt-1">Dihitung dari penghasilan bulanan Anda.</p>
                    </div>
                    <div class="space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                            <label class="text-sm font-medium text-gray-600">Gaji Bulanan</label>
                            <div class="md:col-span-2 relative">
                                <span class="absolute left-4 top-3 text-gray-400 text-sm">Rp</span>
                                <input type="number" id="inputGaji"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 pl-10 text-right focus:ring-2 focus:ring-emerald-500 outline-none transition"
                                    placeholder="0">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                            <label class="text-sm font-medium text-gray-600">Bonus/Tunjangan</label>
                            <div class="md:col-span-2 relative">
                                <span class="absolute left-4 top-3 text-gray-400 text-sm">Rp</span>
                                <input type="number" id="inputBonus"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 pl-10 text-right focus:ring-2 focus:ring-emerald-500 outline-none transition"
                                    placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                        <p class="text-sm font-semibold text-gray-700 mb-2">Zakat Profesi (2.5%):</p>
                        <h3 class="text-4xl font-bold text-emerald-500" id="hasilProfesi">Rp 0</h3>
                    </div>
                </div>


                <div id="content-fitrah" class="hidden">
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-gray-800">Zakat Fitrah</h2>
                        <p class="text-gray-400 text-xs mt-1">Wajib bagi setiap jiwa, dibayarkan di bulan Ramadhan.</p>
                    </div>
                    <div class="space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                            <label class="text-sm font-medium text-gray-600">Jumlah Orang</label>
                            <div class="md:col-span-2">
                                <input type="number" id="inputJiwa" value="1"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-right focus:ring-2 focus:ring-emerald-500 outline-none transition">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                            <label class="text-sm font-medium text-gray-600">Harga Beras (per orang)</label>
                            <div class="md:col-span-2">
                                <select id="inputHargaBeras"
                                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-right focus:ring-2 focus:ring-emerald-500 outline-none transition">
                                    <option value="45000">Rp 45.000 (Standar)</option>
                                    <option value="55000">Rp 55.000 (Premium)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                        <p class="text-sm font-semibold text-gray-700 mb-2">Total Zakat Fitrah:</p>
                        <h3 class="text-4xl font-bold text-emerald-500" id="hasilFitrah">Rp 45.000</h3>
                    </div>
                </div>


                <div class="mt-10">
                    <button
                        class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-4 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-0.5">
                        BAYAR ZAKAT SEKARANG
                    </button>
                </div>

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
    // --- KONFIGURASI HARGA (Bisa diupdate dari Database nanti) ---
    const HARGA_EMAS = 1200000; // per gram
    const HARGA_PERAK = 14000; // per gram
    const NISHAB_MAAL = 85 * HARGA_EMAS; // 85 gram emas

    // Update tampilan nishab di HTML
    const formatRupiah = (angka) => new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    }).format(angka);
    document.getElementById('displayNishab').innerText = formatRupiah(NISHAB_MAAL);

    // --- 1. LOGIKA PINDAH TAB ---
    function switchTab(tab) {
        // Sembunyikan semua konten
        ['maal', 'profesi', 'fitrah'].forEach(t => {
            document.getElementById('content-' + t).classList.add('hidden');

            // Reset style tombol tab
            const btn = document.getElementById('tab-' + t);
            btn.className =
                "py-4 text-sm font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-50 transition border-b border-gray-200";
        });

        // Tampilkan konten yang dipilih
        document.getElementById('content-' + tab).classList.remove('hidden');

        // Set style tombol aktif (Font Bold, Border Atas Hijau, Background Putih)
        const activeBtn = document.getElementById('tab-' + tab);
        activeBtn.className =
            "py-4 text-sm font-bold text-gray-700 bg-white border-t-2 border-emerald-500 border-x border-gray-100 -mb-px rounded-t z-10";
    }

    // --- 2. HITUNG OTOMATIS SAAT MENGETIK ---

    // A. Zakat Maal Listener
    const inputsMaal = ['inputEmas', 'inputPerak', 'inputUang', 'inputSaham', 'inputUtang'];
    inputsMaal.forEach(id => {
        document.getElementById(id).addEventListener('input', hitungMaal);
    });

    function hitungMaal() {
        let emas = parseFloat(document.getElementById('inputEmas').value) || 0;
        let perak = parseFloat(document.getElementById('inputPerak').value) || 0;
        let uang = parseFloat(document.getElementById('inputUang').value) || 0;
        let saham = parseFloat(document.getElementById('inputSaham').value) || 0;
        let utang = parseFloat(document.getElementById('inputUtang').value) || 0;

        let totalHarta = (emas * HARGA_EMAS) + (perak * HARGA_PERAK) + uang + saham;
        let hartaBersih = totalHarta - utang;

        let bayar = 0;
        let statusText = document.getElementById('statusMaal');

        if (hartaBersih >= NISHAB_MAAL) {
            bayar = hartaBersih * 0.025;
            statusText.classList.add('hidden'); // Sembunyikan pesan merah
        } else {
            bayar = 0;
            statusText.classList.remove('hidden'); // Tampilkan pesan belum nishab
            statusText.innerText = "Total Harta Bersih (" + formatRupiah(hartaBersih) + ") belum mencapai Nishab.";
        }

        document.getElementById('hasilMaal').innerText = formatRupiah(bayar);
    }

    // B. Zakat Profesi Listener
    ['inputGaji', 'inputBonus'].forEach(id => {
        document.getElementById(id).addEventListener('input', hitungProfesi);
    });

    function hitungProfesi() {
        let gaji = parseFloat(document.getElementById('inputGaji').value) || 0;
        let bonus = parseFloat(document.getElementById('inputBonus').value) || 0;
        let total = gaji + bonus;

        // Nishab Profesi (opsional, ada yang pakai nishab ada yang tidak. Di sini kita hitung langsung 2.5%)
        let zakat = total * 0.025;
        document.getElementById('hasilProfesi').innerText = formatRupiah(zakat);
    }

    // C. Zakat Fitrah Listener
    ['inputJiwa', 'inputHargaBeras'].forEach(id => {
        document.getElementById(id).addEventListener('input', hitungFitrah);
    });

    function hitungFitrah() {
        let jiwa = parseFloat(document.getElementById('inputJiwa').value) || 0;
        let harga = parseFloat(document.getElementById('inputHargaBeras').value) || 0;

        let total = jiwa * harga;
        document.getElementById('hasilFitrah').innerText = formatRupiah(total);
    }
    </script>
</body>

</html>