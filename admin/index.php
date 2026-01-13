<?php
session_start();

// cek login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// arahkan ke dashboard
header("Location: dashboard.php");
exit;