<?php
include "../config/koneksi.php";
require_once "../config/Midtrans.php";

$nama   = $_POST['nama'] ?? 'Hamba Allah';
$email  = $_POST['email'] ?? '';
$jumlah = $_POST['jumlah'] ?? 0;

$order_id = "DONASI-" . time();

// Update: Menggunakan 'jumlah' dan 'created_at' sesuai database kamu
$query_db = "INSERT INTO donasi (nama, email, jumlah, order_id, status, created_at) 
             VALUES ('$nama', '$email', '$jumlah', '$order_id', 'pending', NOW())";

if (!mysqli_query($conn, $query_db)) {
    die("Error Database: " . mysqli_error($conn));
}

$params = [
    'transaction_details' => ['order_id' => $order_id, 'gross_amount' => $jumlah],
    'customer_details' => ['first_name' => $nama, 'email' => $email],
];

$snapToken = \Midtrans\Snap::getSnapToken($params);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Donasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-slate-100 font-sans tracking-tight">

    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-md w-full bg-white rounded-3xl shadow-2xl overflow-hidden transform transition-all">

            <div class="bg-gradient-to-r from-[#4ade80] to-[#3b82f6] p-8 text-white text-center relative">
                <div
                    class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center mx-auto mb-4 border border-white/30">
                    <i class="fa-solid fa-check text-2xl text-white"></i>
                </div>
                <h2 class="text-2xl font-extrabold tracking-wide">Konfirmasi Donasi</h2>
                <p class="text-white/80 text-sm mt-1 font-medium">Satu langkah lagi untuk berbuat baik</p>
            </div>

            <div class="p-8 bg-white">
                <div class="space-y-6">
                    <div class="flex justify-between items-center group">
                        <span class="text-gray-400 font-medium">Donatur</span>
                        <span
                            class="text-gray-800 font-bold group-hover:text-green-500 transition-colors"><?= htmlspecialchars($nama) ?></span>
                    </div>

                    <div class="flex justify-between items-center group">
                        <span class="text-gray-400 font-medium">Email</span>
                        <span class="text-gray-500 italic text-sm"><?= htmlspecialchars($email) ?></span>
                    </div>

                    <div class="h-px bg-gray-100 w-full"></div>

                    <div class="text-center py-2">
                        <span class="block text-gray-400 text-xs uppercase tracking-widest mb-1 text-center">Total yang
                            dibayarkan</span>
                        <span
                            class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-blue-600">
                            Rp <?= number_format($jumlah, 0, ',', '.') ?>
                        </span>
                    </div>
                </div>

                <div class="mt-10">
                    <button id="pay-button"
                        class="w-full bg-gradient-to-r from-[#3b82f6] to-[#2dd4bf] hover:opacity-90 text-white font-bold py-4 rounded-2xl transition duration-300 shadow-lg shadow-blue-200 flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-shield-heart"></i>
                        <span>Donasi Sekarang</span>
                    </button>

                    <button onclick="history.back()"
                        class="w-full mt-4 text-gray-400 hover:text-gray-600 text-sm font-medium transition text-center">
                        Batal dan Kembali
                    </button>
                </div>
            </div>

            <div class="bg-gray-50 py-4 text-center border-t border-gray-100">
                <p class="text-[10px] text-gray-400 uppercase tracking-[0.2em] font-bold italic">Secure Payment by
                    Midtrans</p>
            </div>
        </div>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?= \Midtrans\Config::$clientKey ?>">
    </script>

    <script type="text/javascript">
    document.getElementById('pay-button').onclick = function() {
        snap.pay('<?= $snapToken ?>', {
            onSuccess: function(result) {
                // Mengarahkan ke sukses.php dengan membawa order_id untuk update database otomatis
                window.location.href = "sukses.php?order_id=" + result.order_id;
            },
            onPending: function(result) {
                alert("Menunggu pembayaran...");
            },
            onError: function(result) {
                alert("Pembayaran gagal!");
            }
        });
    };
    </script>
</body>

</html>