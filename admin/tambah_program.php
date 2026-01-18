<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-white shadow-lg rounded-2xl p-8">

        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            Tambah Program Unggulan
        </h2>

        <form action="simpan_program.php" method="POST" enctype="multipart/form-data" class="space-y-5">

            <!-- Judul -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Judul Program
                </label>
                <input type="text" name="judul" placeholder="Contoh: Beasiswa Pendidikan Yatim" required class="w-full rounded-lg border border-gray-300 px-4 py-3
                 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <!-- Target -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Target Donasi (Rp)
                </label>
                <input type="number" name="target" placeholder="Contoh: 50000000" required class="w-full rounded-lg border border-gray-300 px-4 py-3
                 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <!-- Deskripsi -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Deskripsi Program
                </label>
                <textarea name="deskripsi" rows="4" placeholder="Jelaskan tujuan dan manfaat program..." class="w-full rounded-lg border border-gray-300 px-4 py-3
                 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>

            <!-- Upload Gambar -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Gambar Program
                </label>
                <input type="file" name="gambar" accept="image/*" class="w-full rounded-lg border border-gray-300 px-4 py-2
                 bg-white file:mr-4 file:py-2 file:px-4
                 file:rounded-full file:border-0
                 file:bg-blue-50 file:text-blue-700
                 hover:file:bg-blue-100" />
                <p class="text-xs text-gray-500 mt-1">
                    Format JPG/PNG, maksimal 2MB
                </p>
            </div>

            <!-- Button -->
            <div class="flex justify-end gap-3 pt-4">
                <a href="dashboard.php?page=program_unggulan" class="px-6 py-2 rounded-lg border border-gray-300
                  text-gray-600 hover:bg-gray-100 transition">
                    Batal
                </a>

                <button type="submit" class="px-6 py-2 rounded-lg bg-blue-600
                 text-white font-semibold hover:bg-blue-700
                 transition shadow-md">
                    Simpan Program
                </button>
            </div>

        </form>
    </div>
</div>