<<<<<<< HEAD=======<?php
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
?>>>>>>>> 63c3877074a519eb69ed95c735c6502c9f13d074
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donasi Panti Asuhan</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 font-sans">
        <div class="bg-blue-700 text-white py-16 px-4 text-center shadow-md">
            <h1 class="text-4xl font-extrabold">Bantu Sesama, Ukir Senyuman</h1>
            <p class="mt-2 text-blue-100">Donasi Anda sangat berarti bagi anak-anak panti kami.</p>
        </div>

        <div class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Kirim Donasi</h2>
                <form action="prosesdonasi.php" method="POST" class="space-y-4">
                    <input type="text" name="nama" placeholder="Nama Lengkap" required
                        class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                    <input type="email" name="email" placeholder="Email Anda" required
                        class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                    <input type="number" name="jumlah" min="10000" placeholder="Jumlah (Min. 10.000)" required
                        class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition shadow-lg">Donasi
                        Sekarang</button>
                </form>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Donatur Terbaru</h2>
                <div class="space-y-4 max-h-80 overflow-y-auto">
                    <?php
                $query = mysqli_query($conn, "SELECT * FROM donasi WHERE status_pembayaran='settlement' ORDER BY id DESC");
                if (mysqli_num_rows($query) > 0) {
                    while($row = mysqli_fetch_assoc($query)) {
                        echo "<div class='flex justify-between p-4 bg-gray-50 rounded-lg border-l-4 border-blue-500 shadow-sm'>";
                        echo "<div><p class='font-bold text-gray-700'>".htmlspecialchars($row['nama_donatur'])."</p>";
                        echo "<p class='text-xs text-gray-400'>".date('d M Y', strtotime($row['waktu_transaksi']))."</p></div>";
                        echo "<p class='font-semibold text-blue-600'>Rp ".number_format($row['jumlah'], 0, ',', '.')."</p></div>";
                    }
                } else {
                    echo "<p class='text-center text-gray-400 italic py-10'>Belum ada donatur. Jadilah yang pertama!</p>";
                }
                ?>
                </div>
            </div>
        </div>
    </body>

    </html>