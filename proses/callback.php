<?php
include "../config/koneksi.php";

// Ambil data JSON dari Midtrans
$raw = file_get_contents("php://input");

// Kalau dibuka lewat browser (tidak ada JSON)
if (empty($raw)) {
    echo "Callback endpoint OK";
    exit;
}

// Decode JSON
$data = json_decode($raw, true);

// Kalau JSON rusak
if (!$data) {
    http_response_code(400);
    exit;
}

// Ambil data
$order_id = $data['order_id'] ?? '';
$transaction_status = $data['transaction_status'] ?? '';

// Mapping status
$status = 'pending';

if ($transaction_status == 'settlement' || $transaction_status == 'capture') {
    $status = 'success';
} elseif ($transaction_status == 'expire') {
    $status = 'expired';
} elseif ($transaction_status == 'cancel' || $transaction_status == 'deny') {
    $status = 'failed';
}

// Update DB
if ($order_id != '') {
    mysqli_query(
        $conn,
        "UPDATE donasi SET status='$status' WHERE order_id='$order_id'"
    );
}

http_response_code(200);