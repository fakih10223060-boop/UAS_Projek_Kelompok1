<?php
// checkout_donasi.php
// File ini berfungsi sebagai form pengumpulan data final sebelum submit ke database.

// ASUMSI: File koneksi tidak perlu di-include di sini 
// karena data belum disimpan, hanya dikumpulkan dan dikirim ke proses_checkout.php.
// Anda hanya perlu file ini jika ingin mengambil data program donasi dari database.

// Fungsi helper untuk memformat angka menjadi Rupiah (tanpa Rp)
function format_nominal($nominal) {
    // Menghapus titik, lalu mengembalikan format ribuan. Contoh: '100.000' -> '100000' -> '100.000'
    return number_format(floatval(str_replace('.', '', $nominal)), 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DONASI - Aksi Nyata Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");

    body {
        font-family: "Inter", sans-serif;
    }

    /* Style untuk radio button yang tersembunyi */
    .radio-card input:checked+div {
        border-color: #3b82f6;
        /* border-blue-500 */
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        background-color: #eff6ff;
        /* bg-blue-50 */
    }

    .radio-card input:checked+div p {
        color: #1d4ed8;
        /* text-blue-700 */
    }
    </style>
</head>

<body class="bg-gray-50 text-gray-700">
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



    <main class="container mx-auto px-4 py-10 max-w-4xl">
        <h1 class="text-2xl font-bold text-center mb-10 text-gray-800">
            LANJUTKAN DONASI ANDA
        </h1>

        <form id="donasiForm" action="proses_checkout.php" method="POST" class="space-y-10">

            <section class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm">
                <h2 class="text-lg font-bold mb-2 text-gray-800">Data Donatur</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-[10px] font-bold text-gray-500 mb-1 uppercase">Nama Lengkap</label>
                        <input type="text" name="nama" required id="input_nama"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-blue-500 outline-none"
                            placeholder="Nama Lengkap Anda" />
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-500 mb-1 uppercase">Email</label>
                        <input type="email" name="email" required id="input_email"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-blue-500 outline-none"
                            placeholder="contoh@email.com" />
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-500 mb-1 uppercase">Nomor Telepon</label>
                        <input type="tel" name="phone" required id="input_phone"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-blue-500 outline-none"
                            placeholder="08xxxxxxxxxx" />
                    </div>
                    <div class="flex items-center space-x-2 pt-2">
                        <input type="checkbox" id="anonim" name="anonim" value="1"
                            class="rounded text-blue-600 focus:ring-blue-500" />
                        <label for="anonim" class="text-[10px] text-gray-500 font-medium italic">Donasi sebagai Anonim
                            (Nama Anda tidak akan ditampilkan di
                            publik)</label>
                    </div>
                </div>
            </section>

            <section class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm">
                <h2 class="text-lg font-bold mb-2 text-gray-800">Nominal Donasi</h2>
                <div class="relative mb-4">
                    <span class="absolute left-4 top-3 text-sm text-gray-400">Rp</span>
                    <input type="number" name="jumlah_donasi" id="input_nominal" required min="10000" value=""
                        class="w-full border border-gray-200 rounded-lg pl-10 pr-4 py-2.5 text-sm focus:ring-1 focus:ring-blue-500 outline-none font-bold"
                        placeholder="Minimal Rp 10.000" />
                </div>

                <div class="grid grid-cols-2 md:grid-cols-5 gap-2">
                    <?php 
                    $nominals = [50000, 100000, 250000, 500000, 1000000];
                    foreach($nominals as $val): 
                        $formatted_val = format_nominal($val);
                    ?>
                    <button type="button" onclick="setNominal(<?= $val ?>)"
                        class="btn-nominal border border-blue-100 text-blue-600 py-2 rounded-lg text-[10px] font-bold hover:bg-blue-50 transition"
                        data-value="<?= $val ?>">
                        Rp <?= $formatted_val; ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm">
                <h2 class="text-lg font-bold mb-2 text-gray-800">
                    Pilih Metode Pembayaran
                </h2>
                <div class="flex border-b border-gray-100 mb-6 space-x-6">
                    <button type="button" onclick="showTab('transfer')" id="tab-transfer"
                        class="text-blue-600 border-b-2 border-blue-600 pb-2 text-[11px] font-bold tab-button"
                        data-target="transfer">
                        Transfer Bank Otomatis
                    </button>
                    <button type="button" onclick="showTab('ewallet')" id="tab-ewallet"
                        class="text-gray-400 pb-2 text-[11px] font-bold tab-button" data-target="ewallet">
                        E-Wallet & QRIS
                    </button>

                </div>

                <div id="content-transfer" class="tab-content grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="radio-card">
                        <input type="radio" name="metode_pembayaran" value="Mandiri_VA" class="hidden" checked>
                        <div
                            class="border border-gray-100 rounded-lg p-4 flex items-center space-x-4 cursor-pointer hover:border-blue-500 transition group">
                            <div class="w-12 h-8 bg-gray-200 rounded"></div>
                            <div>
                                <p class="text-xs font-bold text-gray-800">Mandiri Virtual Account</p>
                                <p class="text-[9px] text-gray-400">Nomor Virtual Account akan muncul setelah
                                    konfirmasi.</p>
                            </div>
                        </div>
                    </label>

                    <label class="radio-card">
                        <input type="radio" name="metode_pembayaran" value="BCA_VA" class="hidden">
                        <div
                            class="border border-gray-100 rounded-lg p-4 flex items-center space-x-4 cursor-pointer hover:border-blue-500 transition group">
                            <div class="w-12 h-8 bg-gray-200 rounded"></div>
                            <div>
                                <p class="text-xs font-bold text-gray-800">BCA Virtual Account</p>
                                <p class="text-[9px] text-gray-400">Nomor Virtual Account akan muncul setelah
                                    konfirmasi.</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div id="content-ewallet" class="tab-content hidden grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="radio-card">
                        <input type="radio" name="metode_pembayaran" value="QRIS" class="hidden">
                        <div
                            class="border border-gray-100 rounded-lg p-4 flex items-center space-x-4 cursor-pointer hover:border-blue-500 transition group">
                            <div class="w-12 h-8 bg-green-200 rounded"></div>
                            <div>
                                <p class="text-xs font-bold text-gray-800">QRIS (Gopay, Dana, OVO, ShopeePay)</p>
                                <p class="text-[9px] text-gray-400">Bayar menggunakan semua E-Wallet.</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div id="content-ritel" class="tab-content hidden grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="radio-card">
                        <input type="radio" name="metode_pembayaran" value="Indomaret" class="hidden">
                        <div
                            class="border border-gray-100 rounded-lg p-4 flex items-center space-x-4 cursor-pointer hover:border-blue-500 transition group">
                            <div class="w-12 h-8 bg-red-200 rounded"></div>
                            <div>
                                <p class="text-xs font-bold text-gray-800">Bayar di Indomaret</p>
                                <p class="text-[9px] text-gray-400">Dapatkan kode bayar setelah konfirmasi.</p>
                            </div>
                        </div>
                    </label>
                </div>

            </section>

            <section class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm">
                <h2 class="text-lg font-bold mb-2 text-gray-800">
                    Konfirmasi Donasi
                </h2>
                <div class="space-y-3 mb-8" id="konfirmasi-preview">
                    <div class="flex justify-between text-[11px]">
                        <span class="text-gray-400 font-medium">Nama Donatur:</span>
                        <span class="text-gray-800 font-bold" id="preview_nama">-</span>
                    </div>
                    <div class="flex justify-between text-[11px]">
                        <span class="text-gray-400 font-medium">Email:</span>
                        <span class="text-gray-800 font-bold" id="preview_email">-</span>
                    </div>
                    <div class="flex justify-between text-[11px]">
                        <span class="text-gray-400 font-medium">Telepon:</span>
                        <span class="text-gray-800 font-bold" id="preview_phone">-</span>
                    </div>

                    <div class="flex justify-between text-[11px]">
                        <span class="text-gray-400 font-medium">Metode Pembayaran:</span>
                        <span class="text-gray-800 font-bold" id="preview_metode">-</span>
                    </div>

                    <div class="flex justify-between items-center pt-2 border-t border-gray-50">
                        <span class="text-[11px] text-gray-400 font-medium">Jumlah Donasi:</span>
                        <span class="text-lg font-extrabold text-blue-600" id="preview_nominal">Rp 0</span>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-green-500 text-white py-3 rounded-lg font-bold text-sm hover:bg-green-600 transition">
                    Selesaikan Donasi
                </button>
            </section>
        </form>
    </main>

    <script>
    // 1. Fungsi untuk mengisi nominal donasi
    function setNominal(value) {
        const input = document.getElementById('input_nominal');
        input.value = value;
        updatePreview();
    }

    // 2. Fungsi untuk menampilkan tab (Metode Pembayaran)
    function showTab(tabName) {
        // Sembunyikan semua konten dan atur style semua tombol
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
            // Pastikan radio button di tab yang tersembunyi tidak terpilih
            content.querySelectorAll('input[type="radio"]').forEach(radio => {
                radio.checked = false;
            });
        });

        document.querySelectorAll('.tab-button').forEach(button => {
            button.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
            button.classList.add('text-gray-400');
        });

        // Tampilkan konten yang dipilih dan atur style tombol yang dipilih
        const selectedContent = document.getElementById(`content-${tabName}`);
        const selectedButton = document.getElementById(`tab-${tabName}`);

        if (selectedContent) {
            selectedContent.classList.remove('hidden');
            // Pilih radio button pertama di tab yang aktif secara default
            const firstRadio = selectedContent.querySelector('input[type="radio"]');
            if (firstRadio) {
                firstRadio.checked = true;
            }
            updatePreview();
        }

        if (selectedButton) {
            selectedButton.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
            selectedButton.classList.remove('text-gray-400');
        }
    }

    // 3. Fungsi untuk mengupdate preview Konfirmasi Donasi
    function updatePreview() {
        const nama = document.getElementById('input_nama').value || '-';
        const email = document.getElementById('input_email').value || '-';
        const phone = document.getElementById('input_phone').value || '-';
        const nominal = document.getElementById('input_nominal').value;

        // Ambil metode pembayaran yang terpilih
        const selectedMetode = document.querySelector('input[name="metode_pembayaran"]:checked');
        let metodeText = selectedMetode ? selectedMetode.value.replace(/_/g, ' ') : '-';

        // Format Rupiah
        const formattedNominal = "Rp " + new Intl.NumberFormat('id-ID').format(nominal || 0);

        // Update elemen preview
        document.getElementById('preview_nama').innerText = nama;
        document.getElementById('preview_email').innerText = email;
        document.getElementById('preview_phone').innerText = phone;
        document.getElementById('preview_nominal').innerText = formattedNominal;
        document.getElementById('preview_metode').innerText = metodeText;
    }

    // Event Listeners untuk mengupdate preview secara real-time
    document.getElementById('input_nama').addEventListener('input', updatePreview);
    document.getElementById('input_email').addEventListener('input', updatePreview);
    document.getElementById('input_phone').addEventListener('input', updatePreview);
    document.getElementById('input_nominal').addEventListener('input', updatePreview);

    // Event listener untuk radio button (perlu delegasi karena isinya dinamis)
    document.querySelectorAll('input[name="metode_pembayaran"]').forEach(radio => {
        radio.addEventListener('change', updatePreview);
    });

    // Inisialisasi: Tampilkan tab Transfer Bank dan update preview awal
    document.addEventListener('DOMContentLoaded', () => {
        showTab('transfer');
        updatePreview();
    });
    </script>
</body>

</html>