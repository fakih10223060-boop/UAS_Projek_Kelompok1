<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel | AKSI NYATA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 text-slate-800">

    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        <aside class="w-72 bg-gradient-to-b from-blue-700 to-blue-900 text-white flex flex-col shadow-xl">

            <!-- LOGO -->
            <div class="px-6 py-6 border-b border-blue-800">
                <h1 class="text-2xl font-bold tracking-wide">
                    AKSI NYATA
                </h1>
                <p class="text-xs text-blue-200 mt-1">
                    Admin Dashboard
                </p>
            </div>

            <!-- MENU -->
            <nav class="flex-1 px-4 py-6 space-y-1 text-sm font-medium">

                <?php
            function active($p, $page) {
                return $p === $page
                    ? 'bg-blue-600/40 border-l-4 border-white'
                    : 'hover:bg-blue-800/40';
            }
            ?>

                <a href="dashboard.php?page=home"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg <?= active('home', $page) ?>">
                    <span>🏠</span> Dashboard
                </a>

                <a href="dashboard.php?page=berita"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg <?= active('berita', $page) ?>">
                    <span>📰</span> Berita
                </a>

                <a href="dashboard.php?page=galeri"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg <?= active('galeri', $page) ?>">
                    <span>🖼️</span> Galeri
                </a>

                <a href="dashboard.php?page=datadonasi"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg <?= active('datadonasi', $page) ?>">
                    <span>✉️</span> Data Donasi
                </a>
            </nav>

            <!-- FOOTER SIDEBAR -->
            <div class="px-6 py-4 border-t border-blue-800 text-sm text-blue-200">
                Login sebagai
                <div class="font-semibold text-white">
                    <?= $_SESSION['admin']; ?>
                </div>
                <a href="logout.php" class="mt-3 inline-block text-red-300 hover:text-red-400 text-xs">
                    Logout
                </a>
            </div>
        </aside>

        <!-- MAIN -->
        <div class="flex-1 flex flex-col">

            <!-- TOPBAR -->
            <div class="bg-white/80 backdrop-blur border-b px-8 py-4 flex justify-between items-center shadow-sm">
                <h2 class="text-xl font-semibold text-slate-800">
                    Dashboard Admin
                </h2>

                <span class="text-sm text-slate-600">
                    <?= $_SESSION['admin']; ?>
                </span>
            </div>

            <!-- CONTENT -->
            <main class="p-8 flex-1 bg-blue-50">
                <?php
            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'berita':
                    include "berita.php";
                    break;
                case 'tambah_berita':
                    include "tambah_berita.php";
                    break;
                case 'hapus_berita':
                    include "hapus_berita.php";
                    break;

                    
                    
                case 'galeri':
                    include "galeri.php";
                    break;
                case 'hapus_galerikegiatan':
                    include "hapus_galerikegiatan.php";
                    break;
                case 'tambah_galerikegiatan':
                    include "tambah_galerikegiatan.php";
                    break;
                case 'datadonasi':
                    include "datadonasi.php";
                    break;
                default:
                    include "home.php";
                    break;
            }
            ?>
            </main>

        </div>
    </div>

</body>

</html>