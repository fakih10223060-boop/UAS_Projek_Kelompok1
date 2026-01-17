<?php

require_once __DIR__ . '/../vendor/midtrans/Midtrans.php';

// Memanggil file key yang kita buat tadi
// File ini tidak akan di-commit karena sudah masuk .gitignore
include "key.php"; 

// Sekarang ServerKey mengambil variabel dari file key.php
\Midtrans\Config::$serverKey = $server_key; 
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

?>