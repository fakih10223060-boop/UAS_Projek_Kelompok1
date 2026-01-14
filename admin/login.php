<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-cover bg-center"
    style="background-image: url('../admin/asset/logo1.jpeg');">

    <!-- Overlay gelap -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Card Login -->
    <div class="relative bg-white w-full max-w-md rounded-xl shadow-xl p-8 z-10">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Login Admin
        </h2>

        <!-- Pesan -->
        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm">
            Username atau password salah
        </div>
        <?php endif; ?>

        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'logout'): ?>
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 text-sm">
            Anda berhasil logout
        </div>
        <?php endif; ?>

        <!-- Form Login -->
        <form action="proses_login.php" method="POST" class="space-y-4">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Username
                </label>
                <input type="text" name="username" placeholder="Masukkan username" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input type="password" name="password" placeholder="Masukkan password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" name="login"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition">
                Login
            </button>
        </form>

        <p class="text-center text-xs text-gray-500 mt-6">
            © <?= date('Y'); ?> AKSI NYATA| Admin Panel
        </p>

    </div>

</body>

</html>