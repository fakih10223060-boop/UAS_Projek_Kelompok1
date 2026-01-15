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
        <div class="max-w-md w-full bg-white rounded-3xl shadow-2xl overflow-hidden text-center">

            <div class="bg-gradient-to-br from-green-400 to-blue-500 p-12 text-white relative">
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="fa-solid fa-check text-5xl text-green-500"></i>
                </div>
                <h1 class="text-3xl font-black italic tracking-tighter">SUCCESS!</h1>
            </div>

            <div class="p-10">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Terima Kasih, Orang Baik!</h2>
                <p class="text-gray-500 leading-relaxed">
                    Donasi Anda telah kami terima dan akan disalurkan kepada yang membutuhkan. Semoga menjadi berkah
                    untuk kita semua.
                </p>

                <div class="mt-8 p-4 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                    <p class="text-xs text-gray-400 uppercase font-bold tracking-widest">Status Transaksi</p>
                    <p class="text-green-600 font-extrabold text-lg uppercase tracking-wider">Berhasil Dibayar</p>
                </div>

                <div class="mt-10">
                    <a href="index.php"
                        class="inline-block w-full bg-slate-800 hover:bg-black text-white font-bold py-4 rounded-2xl transition duration-300 shadow-lg shadow-slate-200">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>

            <div class="bg-slate-50 py-4 text-gray-400 text-[10px] uppercase font-bold tracking-[0.3em]">
                Aksi Nyata &bull; Kelompok 1
            </div>
        </div>
    </div>

    <script>
    // Jalankan efek konfeti saat halaman dimuat
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