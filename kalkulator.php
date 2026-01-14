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

    /* Hapus panah pada input number */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    </style>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-2">
                    <div class="bg-blue-500 text-white p-1.5 rounded-lg">
                        <i class="ph ph-heart text-2xl"></i>
                    </div>
                    <span class="text-xl font-bold text-blue-600">Berkah Amal</span>
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-500 hover:text-blue-600 font-medium text-sm">Home</a>
                    <a href="#" class="text-gray-500 hover:text-blue-600 font-medium text-sm">Program</a>
                    <a href="#" class="text-gray-500 hover:text-blue-600 font-medium text-sm">Tentang Kami</a>
                    <a href="#" class="text-gray-500 hover:text-blue-600 font-medium text-sm">Berita</a>
                    <a href="#" class="text-blue-600 font-bold text-sm">Kalkulator Zakat</a>
                </div>

                <a href="#"
                    class="bg-emerald-500 hover:bg-emerald-600 text-white text-sm font-bold py-2.5 px-6 rounded-full transition shadow-md">
                    DONASI SEKARANG
                </a>
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

    <footer class="bg-blue-500 pt-16 pb-8 text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="bg-white text-blue-500 p-1 rounded">
                            <i class="ph ph-heart text-xl"></i>
                        </div>
                        <span class="text-xl font-bold">Berkah Amal</span>
                    </div>
                    <p class="text-blue-100 text-sm leading-relaxed">
                        Mendedikasikan diri untuk membantu sesama melalui pendidikan, kemanusiaan, dan zakat.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Kontak</h4>
                    <ul class="space-y-3 text-blue-100 text-sm">
                        <li class="flex items-center gap-2"><i class="ph ph-phone"></i> +62 812 3456 7890</li>
                        <li class="flex items-center gap-2"><i class="ph ph-envelope"></i> info@berkahamal.org</li>
                        <li class="flex items-center gap-2"><i class="ph ph-map-pin"></i> Jl. Contoh No. 123, Jakarta
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2 text-blue-100 text-sm">
                        <li><a href="#" class="hover:text-white hover:underline">Program Unggulan</a></li>
                        <li><a href="#" class="hover:text-white hover:underline">Berita Terbaru</a></li>
                        <li><a href="#" class="hover:text-white hover:underline">Kalkulator Zakat</a></li>
                        <li><a href="#" class="hover:text-white hover:underline">Donasi Sekarang</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Sosial Media</h4>
                    <ul class="space-y-2 text-blue-100 text-sm">
                        <li><a href="#" class="flex items-center gap-2 hover:text-white"><i
                                    class="ph ph-facebook-logo"></i> Facebook</a></li>
                        <li><a href="#" class="flex items-center gap-2 hover:text-white"><i
                                    class="ph ph-twitter-logo"></i> Twitter</a></li>
                        <li><a href="#" class="flex items-center gap-2 hover:text-white"><i
                                    class="ph ph-instagram-logo"></i> Instagram</a></li>
                        <li><a href="#" class="flex items-center gap-2 hover:text-white"><i
                                    class="ph ph-youtube-logo"></i> YouTube</a></li>
                    </ul>
                </div>
            </div>

            <div
                class="border-t border-blue-400 pt-8 mt-8 flex flex-col md:flex-row justify-between items-center text-xs text-blue-200">
                <div class="mb-4 md:mb-0">
                    <p class="font-bold mb-2">Legalitas</p>
                    <div class="flex gap-4">
                        <span>SK Kemenkumham</span>
                        <span>Laporan Tahunan</span>
                        <span>Kebijakan Privasi</span>
                    </div>
                </div>
                <p>&copy; 2025 Berkah Amal. All rights reserved.</p>
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