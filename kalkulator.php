<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Zakat Lengkap - Berkah Amal</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Animasi Transisi Tab */
        .tab-content { display: none; animation: fadeIn 0.5s; }
        .tab-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-2xl shadow-xl w-full max-w-lg overflow-hidden">
        
        <div class="bg-green-600 p-6 text-center text-white">
            <h1 class="text-2xl font-bold">Kalkulator Zakat</h1>
            <p class="text-green-100 text-sm mt-1">Hitung kewajiban zakat Anda dengan mudah</p>
        </div>

        <div class="flex border-b border-gray-200">
            <button onclick="bukaTab('maal')" id="btn-maal" class="flex-1 py-4 text-sm font-semibold text-green-600 border-b-2 border-green-600 bg-green-50 focus:outline-none transition">
                💰 Zakat Maal
            </button>
            <button onclick="bukaTab('profesi')" id="btn-profesi" class="flex-1 py-4 text-sm font-semibold text-gray-500 hover:text-green-600 focus:outline-none transition">
                💼 Zakat Profesi
            </button>
            <button onclick="bukaTab('fitrah')" id="btn-fitrah" class="flex-1 py-4 text-sm font-semibold text-gray-500 hover:text-green-600 focus:outline-none transition">
                🍚 Zakat Fitrah
            </button>
        </div>

        <div class="p-6">

            <div id="tab-maal" class="tab-content active">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Hitung Zakat Maal (Harta)</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Total Harta (Rp)</label>
                        <input type="number" id="hartaMaal" placeholder="Emas, tabungan, aset..." class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                    </div>
                    <button onclick="hitungMaal()" class="w-full bg-green-600 text-white font-bold py-2 rounded-lg hover:bg-green-700 transition">Hitung</button>
                    
                    <div id="hasilMaal" class="hidden bg-gray-50 p-4 rounded-lg border mt-2">
                        <p class="text-sm text-gray-600">Zakat yang harus dikeluarkan:</p>
                        <p id="angkaMaal" class="text-2xl font-bold text-green-700">Rp 0</p>
                        <p id="infoNishabMaal" class="text-xs text-red-500 mt-1 font-semibold"></p>
                    </div>
                </div>
            </div>

            <div id="tab-profesi" class="tab-content">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Hitung Zakat Profesi (Penghasilan)</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Penghasilan Bulanan (Rp)</label>
                        <input type="number" id="gajiProfesi" placeholder="Gaji pokok + tunjangan" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pendapatan Lain (Opsional)</label>
                        <input type="number" id="bonusProfesi" placeholder="Bonus, thr, dll" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                    </div>
                    <button onclick="hitungProfesi()" class="w-full bg-green-600 text-white font-bold py-2 rounded-lg hover:bg-green-700 transition">Hitung</button>
                    
                    <div id="hasilProfesi" class="hidden bg-gray-50 p-4 rounded-lg border mt-2">
                        <p class="text-sm text-gray-600">Zakat bulan ini:</p>
                        <p id="angkaProfesi" class="text-2xl font-bold text-green-700">Rp 0</p>
                        <p id="infoNishabProfesi" class="text-xs text-red-500 mt-1 font-semibold"></p>
                    </div>
                </div>
            </div>

            <div id="tab-fitrah" class="tab-content">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Hitung Zakat Fitrah</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Jumlah Orang (Jiwa)</label>
                        <input type="number" id="jumlahJiwa" value="1" min="1" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Harga Beras per Orang (Rp)</label>
                        <select id="hargaBeras" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                            <option value="45000">Rp 45.000 (Standar Baznas)</option>
                            <option value="50000">Rp 50.000 (Kualitas Super)</option>
                            <option value="55000">Rp 55.000 (Premium)</option>
                            <option value="custom">Input Manual...</option>
                        </select>
                        <input type="number" id="hargaBerasManual" placeholder="Masukkan harga manual" class="w-full mt-2 px-4 py-2 border rounded-lg hidden">
                    </div>
                    <button onclick="hitungFitrah()" class="w-full bg-green-600 text-white font-bold py-2 rounded-lg hover:bg-green-700 transition">Hitung</button>
                    
                    <div id="hasilFitrah" class="hidden bg-gray-50 p-4 rounded-lg border mt-2">
                        <p class="text-sm text-gray-600">Total Zakat Fitrah:</p>
                        <p id="angkaFitrah" class="text-2xl font-bold text-green-700">Rp 0</p>
                        <p class="text-xs text-gray-500 mt-1">Dibayarkan berupa beras 2,5 kg/jiwa atau uang seharga tersebut.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // --- 1. Fungsi Format Rupiah ---
        const formatRupiah = (angka) => {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(angka);
        };

        // --- 2. Fungsi Pindah Tab ---
        function bukaTab(tabName) {
            // Sembunyikan semua konten tab
            document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
            // Reset style tombol
            document.querySelectorAll('button[id^="btn-"]').forEach(btn => {
                btn.className = "flex-1 py-4 text-sm font-semibold text-gray-500 hover:text-green-600 focus:outline-none transition";
            });

            // Tampilkan tab yang dipilih
            document.getElementById('tab-' + tabName).classList.add('active');
            // Ubah style tombol aktif
            let activeBtn = document.getElementById('btn-' + tabName);
            activeBtn.className = "flex-1 py-4 text-sm font-semibold text-green-600 border-b-2 border-green-600 bg-green-50 focus:outline-none transition";
        }

        // --- 3. Logika Zakat MAAL ---
        function hitungMaal() {
            let harta = parseFloat(document.getElementById('hartaMaal').value) || 0;
            let hargaEmas = 1300000; // Contoh harga emas per gram saat ini
            let nishab = 85 * hargaEmas; // 85 Gram Emas

            let wajibZakat = harta >= nishab;
            let zakat = wajibZakat ? harta * 0.025 : 0;

            document.getElementById('hasilMaal').classList.remove('hidden');
            document.getElementById('angkaMaal').innerText = formatRupiah(zakat);
            
            let infoEl = document.getElementById('infoNishabMaal');
            if(wajibZakat) {
                infoEl.innerHTML = "✅ Wajib Zakat (Sudah mencapai Nishab " + formatRupiah(nishab) + ")";
                infoEl.className = "text-xs text-green-600 mt-1 font-semibold";
            } else {
                infoEl.innerHTML = "❌ Belum Wajib (Nishab minimal: " + formatRupiah(nishab) + ")";
                infoEl.className = "text-xs text-red-500 mt-1 font-semibold";
            }
        }

        // --- 4. Logika Zakat PROFESI ---
        function hitungProfesi() {
            let gaji = parseFloat(document.getElementById('gajiProfesi').value) || 0;
            let bonus = parseFloat(document.getElementById('bonusProfesi').value) || 0;
            let total = gaji + bonus;

            // Nishab Profesi (Analogi 524kg beras/bulan atau setara 85gr emas/tahun dibagi 12)
            // Kita pakai estimasi aman sekitar 6.8 Juta Rupiah per bulan
            let nishabBulanan = 6800000; 
            
            let wajibZakat = total >= nishabBulanan;
            let zakat = wajibZakat ? total * 0.025 : 0;

            document.getElementById('hasilProfesi').classList.remove('hidden');
            document.getElementById('angkaProfesi').innerText = formatRupiah(zakat);

            let infoEl = document.getElementById('infoNishabProfesi');
            if(wajibZakat) {
                infoEl.innerHTML = "✅ Wajib Zakat (Penghasilan di atas Nishab)";
                infoEl.className = "text-xs text-green-600 mt-1 font-semibold";
            } else {
                infoEl.innerHTML = "❌ Disarankan Sedekah (Belum mencapai Nishab bulanan)";
                infoEl.className = "text-xs text-red-500 mt-1 font-semibold";
            }
        }

        // --- 5. Logika Zakat FITRAH ---
        // Handle dropdown manual input
        document.getElementById('hargaBeras').addEventListener('change', function() {
            let manualInput = document.getElementById('hargaBerasManual');
            if(this.value === 'custom') {
                manualInput.classList.remove('hidden');
            } else {
                manualInput.classList.add('hidden');
            }
        });

        function hitungFitrah() {
            let jiwa = parseFloat(document.getElementById('jumlahJiwa').value) || 0;
            let harga = document.getElementById('hargaBeras').value;
            
            if(harga === 'custom') {
                harga = parseFloat(document.getElementById('hargaBerasManual').value) || 0;
            } else {
                harga = parseFloat(harga);
            }

            let totalBayar = jiwa * harga;

            document.getElementById('hasilFitrah').classList.remove('hidden');
            document.getElementById('angkaFitrah').innerText = formatRupiah(totalBayar);
        }
    </script>
</body>
</html>