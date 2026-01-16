<?php
// 1. Sertakan file konfigurasi dan koneksi
require_once __DIR__ . '/../config/Midtrans.php'; // Berisi Server Key yang aman
include "../config/koneksi.php"; 

// Gunakan namespace Midtrans
use Midtrans\Notification;

try {
    // 2. Inisialisasi notifikasi dari Midtrans
    $notif = new Notification();
} catch (\Exception $e) {
    exit("Gagal memproses notifikasi: " . $e->getMessage());
}

// 3. Ambil data penting dari notifikasi
$transaction = $notif->transaction_status;
$type = $notif->payment_type;
$order_id = $notif->order_id;
$fraud = $notif->fraud_status;

// 4. Tentukan status yang akan disimpan ke database
$status_db = 'pending';

if ($transaction == 'settlement' || $transaction == 'capture') {
    // Untuk kartu kredit (capture), pastikan bukan fraud
    if ($type == 'credit_card') {
        if ($fraud == 'challenge') {
            $status_db = 'challenge';
        } else {
            $status_db = 'success';
        }
    } else {
        $status_db = 'success';
    }
} else if ($transaction == 'pending') {
    $status_db = 'pending';
} else if ($transaction == 'deny' || $transaction == 'expire' || $transaction == 'cancel') {
    $status_db = 'failed';
}

// 5. Update Database
// Pastikan variabel koneksi ($conn atau $koneksi) sesuai dengan file koneksi.php kamu
if (!empty($order_id)) {
    $query = "UPDATE donasi SET status = '$status_db' WHERE order_id = '$order_id'";
    
    // Gunakan variabel koneksi yang benar (sesuaikan $conn atau $koneksi)
    if (mysqli_query($conn, $query)) {
        http_response_code(200);
        echo "Berhasil update status ke: $status_db";
    } else {
        http_response_code(500);
        echo "Gagal update database: " . mysqli_error($conn);
    }
}
?>