<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebaikan Anda Sangat Berarti</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-slate-100 font-sans tracking-tight">

    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl overflow-hidden transform transition-all">

            <div class="bg-gradient-to-br from-green-400 via-emerald-400 to-blue-400 p-10 text-white text-center">
                <div
                    class="inline-flex items-center justify-center w-16 h-16 bg-white/30 rounded-full mb-4 backdrop-blur-sm">
                    <i class="fa-solid fa-heart-pulse text-3xl text-white"></i>
                </div>
                <h2 class="text-3xl font-extrabold mb-1">Donasi Sekarang</h2>
                <p class="text-white/80 text-sm font-medium">Bantu sesama dengan donasi terbaik Anda</p>
            </div>

            <div class="p-8">
                <form action="proses/proses_donasi.php" method="POST" class="space-y-6">

                    <div class="group">
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Nama
                            Lengkap</label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 group-focus-within:text-green-500 transition-colors">
                                <i class="fa-solid fa-user text-sm"></i>
                            </span>
                            <input type="text" name="nama" required placeholder="Masukkan nama Anda"
                                class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-100 rounded-2xl focus:ring-2 focus:ring-green-400 focus:bg-white focus:outline-none transition-all placeholder:text-gray-300">
                        </div>
                    </div>

                    <div class="group">
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1">Alamat
                            Email</label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 group-focus-within:text-blue-500 transition-colors">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </span>
                            <input type="email" name="email" required placeholder="contoh@email.com"
                                class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-100 rounded-2xl focus:ring-2 focus:ring-blue-400 focus:bg-white focus:outline-none transition-all placeholder:text-gray-300">
                        </div>
                    </div>

                    <div class="group">
                        <label
                            class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2 ml-1 text-blue-500">Jumlah
                            Donasi (IDR)</label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-4 font-bold text-gray-400 group-focus-within:text-blue-600 transition-colors">
                                Rp
                            </span>
                            <input type="number" name="jumlah" required min="10000" placeholder="Minimal 10.000"
                                class="w-full pl-12 pr-4 py-4 bg-blue-50 border-2 border-blue-50 rounded-2xl text-xl font-bold text-blue-600 focus:ring-4 focus:ring-blue-100 focus:bg-white focus:outline-none transition-all placeholder:text-gray-300">
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white py-4 rounded-2xl font-bold text-lg shadow-lg shadow-blue-200 hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center space-x-2">
                            <span>Kirim Donasi</span>
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </button>
                        <p class="text-center mt-4 text-[11px] text-gray-400 uppercase tracking-widest font-semibold">
                            Terimakasih Telah Berdonasi</p>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>