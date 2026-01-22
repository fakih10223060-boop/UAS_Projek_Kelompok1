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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | AKSI NYATA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* Animasi halus saat pindah halaman */
    .fade-in {
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>

<body class="bg-slate-100 text-slate-800">

    <div class="flex min-h-screen">

        <aside
            class="w-72 bg-gradient-to-b from-[#43e97b] to-[#38f9d7] text-white flex flex-col shadow-2xl relative z-20">

            <div class="px-8 py-10 border-b border-white/20">
                <div class="flex items-center gap-3">
                    <div class="bg-white p-2 rounded-xl shadow-lg">
                        <svg class="w-6 h-6 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold tracking-tight leading-none text-white">AKSI NYATA</h1>
                        <p class="text-[10px] text-white/80 uppercase tracking-[0.2em] font-bold mt-1">Admin Panel</p>
                    </div>
                </div>
            </div>

            <?php
                function active($p, $page) {
                    // Menu aktif menggunakan efek kaca (Glassmorphism)
                    return $p === $page
                        ? 'bg-white/30 backdrop-blur-md border-l-4 border-white shadow-lg translate-x-1'
                        : 'hover:bg-white/10 hover:translate-x-1 transition-all duration-300';
                }
                ?>

            <a href="dashboard.php?page=home"
                class="flex items-center gap-4 px-5 py-4 rounded-xl transition-all <?= active('home', $page) ?>">
                <span class="text-xl">🏠</span> Dashboard
            </a>

            <a href="dashboard.php?page=berita"
                class="flex items-center gap-4 px-5 py-4 rounded-xl transition-all <?= active('berita', $page) ?>">
                <span class="text-xl">📰</span> Bantuan tersalurkan
            </a>

            <a href="dashboard.php?page=galeri"
                class="flex items-center gap-4 px-5 py-4 rounded-xl transition-all <?= active('galeri', $page) ?>">
                <span class="text-xl">🖼️</span> Galeri
            </a>

            <a href="dashboard.php?page=datadonasi"
                class="flex items-center gap-4 px-5 py-4 rounded-xl transition-all <?= active('datadonasi', $page) ?>">
                <span class="text-xl">✉️</span> Data Donasi
            </a>
            <a href="dashboard.php?page=program_unggulan"
                class="flex items-center gap-4 px-5 py-4 rounded-xl transition-all <?= active('program_unggulan', $page) ?>">
                <span class="text-xl">✉️</span> Program Unggulan
            </a>
            <a href="dashboard.php?page=berita_terbaru"
                class="flex items-center gap-4 px-5 py-4 rounded-xl transition-all <?= active('berita_terbaru', $page) ?>">
                <span class="text-xl">✉️</span>BeritaTerbaru
            </a>
            </ nav>

            <div class="px-6 py-8 border-t border-white/20 bg-black/5">
                <p class="text-[10px] uppercase tracking-widest text-white/70 font-bold mb-3">Administrator Active</p>
                <div class="flex items-center gap-3 mb-5">
                    <div
                        class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center font-bold border border-white/30">
                        <?= strtoupper(substr($_SESSION['admin'], 0, 1)); ?>
                    </div>
                    <div class="font-semibold text-white truncate w-32 text-base">
                        <?= $_SESSION['admin']; ?>
                    </div>
                </div>

                <a href="logout.php"
                    class="flex items-center justify-center gap-2 w-full bg-[#0ea5e9] hover:bg-[#38bdf8] text-white py-3 rounded-xl text-xs font-bold transition-all shadow-lg transform hover:-translate-y-1 active:scale-95">
                    <span>🚪</span> KELUAR SISTEM
                </a>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">

            <header class="bg-white border-b px-8 py-6 flex justify-between items-center shadow-sm">
                <div>
                    <h2 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Halaman Saat Ini</h2>
                    <h3 class="text-2xl font-bold text-slate-800 capitalize leading-none">
                        <?= str_replace('_', ' ', $page) ?>
                    </h3>
                </div>

                <div class="flex items-center gap-4">
                    <div class="bg-emerald-50 px-4 py-2 rounded-lg border border-emerald-100 hidden md:block">
                        <p class="text-[10px] text-emerald-600 font-extrabold uppercase tracking-tighter">Status Koneksi
                        </p>
                        <p class="text-xs font-bold text-emerald-500 flex items-center gap-1">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span> Online
                        </p>
                    </div>
                </div>
            </header>

            <main class="p-8 flex-1 overflow-y-auto bg-slate-50">
                <div class="fade-in">
                    <?php
                    switch ($page) {
                        case 'home': include "home.php"; break;
                        case 'berita': include "berita.php"; break;
                        case 'tambah_berita': include "tambah_berita.php"; break;
                        case 'hapus_berita': include "hapus_berita.php"; break;
                        case 'galeri': include "galeri.php"; break;
                        case 'tambah_galeri': include "tambah_galeri.php"; break;
                        case 'hapus_galeri': include "hapus_galeri.php"; break;
                        case 'datadonasi': include "datadonasi.php"; break;
                        case 'program_unggulan': include "program.php"; break;
                        case 'tambah_program': include "tambah_program.php"; break;
                        case 'hapus_program': include "hapus_program.php"; break;
                        case 'edit_program': include "edit_program.php"; break;
                         case 'berita_terbaru': include "berita_terbaru.php"; break;
                        case 'tambahberita_terbaru': include "tambahberita_terbaru.php"; break;
                        case 'hapusberita_terbaru': include "hapusberita_terbaru.php"; break;
                        default: include "home.php"; break;
                    }
                    ?>
                </div>
            </main>

        </div>
    </div>

</body>

</html>