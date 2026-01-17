<?php
/**
 * 1. HUBUNGKAN DATABASE
 * Pastikan path '../config/koneksi.php' sudah benar sesuai folder VS Code kamu.
 */
include "../config/koneksi.php";

/**
 * 2. LOGIKA UPDATE STATUS (SOLUSI LOCALHOST)
 * Kita mengambil order_id dari URL (?order_id=...) yang dikirim oleh JavaScript di proses_donasi.php.
 */
$order_id = $_GET['order_id'] ?? '';

if (!empty($order_id)) {
    /** * Keamanan: Gunakan mysqli_real_escape_string untuk mencegah SQL Injection.
     * Pastikan variabel koneksi adalah $conn (sesuaikan jika di koneksi.php namanya $koneksi).
     */
    $safe_order_id = mysqli_real_escape_string($conn, $order_id);
    
    // Update status di database dari 'pending' menjadi 'success'
    $query_update = "UPDATE donasi SET status='success' WHERE order_id='$safe_order_id'";
    mysqli_query($conn, $query_update);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih | Donasi Berhasil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
</head>

<body class="bg-slate-50 font-sans tracking-tight">

    <div class="min-h-screen flex items-center justify-center p-6">
        <div
            class="max-w-md w-full bg-white rounded-3xl shadow-2xl overflow-hidden text-center transform transition-all hover:scale-[1.01]">

            <div class="bg-gradient-to-br from-green-400 to-blue-500 p-12 text-white relative">
                <div
                    class="w-24 h-24 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg animate-bounce">
                    <i class="fa-solid fa-check text-5xl text-green-500"></i>
                </div>
                <h1 class="text-3xl font-black italic tracking-tighter uppercase">SUCCESS!</h1>
            </div>

            <div class="p-10">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Terima Kasih, Orang Baik!</h2>
                <p class="text-gray-500 leading-relaxed mb-6">
                    Donasi Anda dengan ID <br>
                    <span
                        class="font-mono font-bold text-slate-800 bg-slate-100 px-2 py-1 rounded"><?php echo htmlspecialchars($order_id); ?></span>
                    <br>
                    telah kami terima dan akan segera disalurkan.
                </p>

                <div class="p-4 bg-green-50 rounded-2xl border border-dashed border-green-200">
                    <p class="text-[10px] text-green-400 uppercase font-bold tracking-[0.2em] mb-1">Status Pembayaran
                    </p>
                    <p class="text-green-600 font-extrabold text-lg uppercase tracking-wider">Berhasil Dibayar</p>
                </div>

                <div class="mt-10">
                    <a href="../index.php"
                        class="inline-block w-full bg-slate-800 hover:bg-black text-white font-bold py-4 rounded-2xl transition duration-300 shadow-lg shadow-slate-200 flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-arrow-left text-sm"></i>
                        <span>Kembali ke Beranda</span>
                    </a>
                </div>
            </div>

            <div
                class="bg-slate-50 py-4 text-gray-400 text-[10px] uppercase font-bold tracking-[0.3em] border-t border-gray-100">
                Aksi Nyata &bull; Kelompok 1
            </div>
        </div>
    </div>

    <script>
    /**
     * Menjalankan efek konfeti warna-warni secara otomatis 
     * saat halaman berhasil dimuat.
     */
    window.onload = function() {
        confetti({
            particleCount: 150,
            spread: 70,
            origin: {
                y: 0.6
            },
            colors: ['#4ade80', '#3b82f6', '#ffffff']
        });
    };
    </script>
</body>

</html>