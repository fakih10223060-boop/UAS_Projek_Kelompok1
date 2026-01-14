<script src="https://cdn.tailwindcss.com"></script>
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">
            Donasi Sekarang
        </h2>
        <p class="text-center text-gray-500 mb-6">
            Bantu sesama dengan donasi terbaik Anda
        </p>

        <form action="proses/proses_donasi.php" method="POST" class="space-y-4">

            <!-- Nama -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nama Lengkap
                </label>
                <input type="text" name="nama" required placeholder="Masukkan nama Anda"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input type="email" name="email" required placeholder="contoh@email.com"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Jumlah Donasi -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Jumlah Donasi (Rp)
                </label>
                <input type="number" name="jumlah" required min="1000" placeholder="10000"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Tombol -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-200">
                Donasi Sekarang
            </button>

        </form>

    </div>
</div>