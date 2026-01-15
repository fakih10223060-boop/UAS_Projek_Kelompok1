<?php

require_once __DIR__ . '/../vendor/midtrans/Midtrans.php';

// Mengambil key dari file .env agar aman
\Midtrans\Config::$serverKey = getenv('MIDTRANS_SERVER');
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

?>