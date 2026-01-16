<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | AKSI NYATA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .bg-gradient-tosca {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center bg-slate-50 p-4">

    <div
        class="flex flex-col md:flex-row w-full max-w-4xl bg-white rounded-3xl shadow-2xl overflow-hidden min-h-[550px]">

        <div class="md:w-1/2 bg-gradient-tosca flex flex-col items-center justify-center p-10 text-white relative">
            <div class="bg-white/20 backdrop-blur-md p-8 rounded-2xl border border-white/30 text-center">
                <div
                    class="bg-white p-3 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-12 h-12 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold mb-2">AKSI NYATA</h1>
                <p class="text-white/90 text-sm leading-relaxed">
                    Bantu sesama dengan manajemen data yang lebih baik dan transparan.
                </p>
            </div>
            <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white/10 rounded-full"></div>
        </div>

        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Login Account</h2>
                <p class="text-gray-400 text-sm mt-2">Silahkan masuk untuk mengelola dashboard admin.</p>
            </div>

            <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
            <div
                class="bg-red-50 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded mb-6 text-sm flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Username atau password salah
            </div>
            <?php endif; ?>

            <form action="proses_login.php" method="POST" class="space-y-5">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Username</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 uppercase text-xs">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </span>
                        <input type="text" name="username" placeholder="admin_nyata" required
                            class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:bg-white transition-all text-gray-700">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </span>
                        <input type="password" name="password" placeholder="••••••••" required
                            class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:bg-white transition-all text-gray-700">
                    </div>
                </div>

                <div class="flex items-center justify-between text-xs py-2">
                    <label class="flex items-center text-gray-500 cursor-pointer">
                        <input type="checkbox" class="mr-2 rounded text-emerald-500"> Ingat saya
                    </label>
                    <a href="#" class="text-blue-500 hover:underline font-semibold">Forgot password?</a>
                </div>

                <button type="submit" name="login"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl font-bold shadow-lg shadow-blue-200 transition-all transform hover:-translate-y-1 active:scale-95">
                    LOGIN SEKARANG →
                </button>
            </form>

            <p class="text-center text-[10px] text-gray-400 mt-10 uppercase tracking-widest">
                © <?= date('Y'); ?> AKSI NYATA | <span class="text-emerald-500">Admin Panel</span>
            </p>
        </div>
    </div>

</body>

</html>