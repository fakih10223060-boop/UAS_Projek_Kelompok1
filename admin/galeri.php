<?php
// 1. KONEKSI DATABASE
// Keluar folder admin (../) lalu masuk ke folder config
include __DIR__ . '/../config/koneksi.php';

// CEK KONEKSI
if (!isset($conn)) {
    die("Koneksi database tidak ditemukan. Pastikan path ../config/koneksi.php benar.");
}

// 2. LOGIKA HAPUS FOTO
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    
    // Ambil nama file agar bisa dihapus dari folder fisik
    $ambil = mysqli_query($conn, "SELECT foto FROM galeri WHERE id = '$id'");
    $data = mysqli_fetch_assoc($ambil);

    if ($data) {
        $foto_lama = "../asset/galeri/" . $data['foto'];
        if (file_exists($foto_lama)) {
            unlink($foto_lama); // Menghapus file dari folder asset/galeri/
        }
        mysqli_query($conn, "DELETE FROM galeri WHERE id = '$id'");
    }
    // Redirect kembali ke halaman galeri
    echo "<script>window.location='dashboard.php?page=galeri';</script>";
    exit;
}

// 3. LOGIKA UPLOAD FOTO
if (isset($_POST['simpan'])) {
    $filename = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    
    // Memberikan nama unik dengan time() agar file tidak tertimpa
    $new_filename = time() . "_" . $filename;
    $target_dir = "../asset/galeri/";

    if (move_uploaded_file($tmp_name, $target_dir . $new_filename)) {
        // Simpan hanya nama file ke database
        mysqli_query($conn, "INSERT INTO galeri (foto, status) VALUES ('$new_filename', 'aktif')");
        echo "<script>window.location='dashboard.php?page=galeri&status=success';</script>";
    } else {
        echo "<script>alert('Gagal mengunggah gambar');</script>";
    }
    exit;
}

// 4. AMBIL DATA UNTUK TABEL
$query_galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC");
?>

<script src="https://cdn.tailwindcss.com"></script>

<div class="p-6 bg-slate-50 min-h-screen">
    <div class="max-w-4xl mx-auto">

        <div class="mb-8">
            <h2 class="text-2xl font-bold text-slate-800">Manajemen Galeri</h2>
            <p class="text-slate-500">Kelola foto kegiatan panti asuhan di sini.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 mb-10">
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-blue-100 p-2 rounded-lg text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800">Upload Foto Baru</h3>
            </div>

            <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
                <div class="w-full">
                    <label
                        class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-slate-300 rounded-2xl cursor-pointer bg-slate-50 hover:bg-blue-50 hover:border-blue-400 transition-all group overflow-hidden relative">
                        <div id="preview-container" class="absolute inset-0 hidden">
                            <img id="image-preview" class="w-full h-full object-cover opacity-30">
                        </div>

                        <div class="flex flex-col items-center justify-center pt-5 pb-6 z-10 text-center px-4">
                            <svg class="w-10 h-10 mb-3 text-slate-400 group-hover:text-blue-500 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p id="file-chosen" class="mb-2 text-sm text-slate-700 font-semibold">Klik untuk pilih
                                gambar</p>
                            <p class="text-xs text-slate-500 uppercase italic">PNG, JPG atau JPEG (Max. 2MB)</p>
                        </div>
                        <input type="file" name="foto" required class="hidden" id="upload-foto"
                            onchange="previewImage()">
                    </label>
                </div>

                <div class="flex justify-center">
                    <button type="submit" name="simpan"
                        class="w-full md:w-64 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl shadow-lg shadow-blue-200 transition-all transform hover:-translate-y-1">
                        Upload Sekarang
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/50">
                <h4 class="font-bold text-slate-700">Koleksi Galeri</h4>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-xs font-bold uppercase tracking-wider">
                            <th class="px-6 py-4">Preview</th>
                            <th class="px-6 py-4">Nama File</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        <?php if(mysqli_num_rows($query_galeri) > 0) : ?>
                        <?php while($g = mysqli_fetch_assoc($query_galeri)) : ?>
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="px-6 py-4">
                                <img src="../asset/galeri/<?= $g['foto']; ?>"
                                    class="w-20 h-14 object-cover rounded-lg border border-slate-200 shadow-sm">
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-700">
                                <span class="block truncate w-48 md:w-64"><?= $g['foto']; ?></span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="dashboard.php?page=galeri&hapus=<?= $g['id']; ?>"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?')"
                                    class="inline-flex items-center justify-center w-10 h-10 text-red-600 bg-red-50 rounded-xl hover:bg-red-600 hover:text-white transition-all shadow-sm group">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                        <?php else : ?>
                        <tr>
                            <td colspan="3" class="px-6 py-12 text-center text-slate-400 italic">
                                Belum ada foto yang diupload.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
// Fungsi untuk menampilkan preview gambar saat dipilih
function previewImage() {
    const input = document.getElementById('upload-foto');
    const display = document.getElementById('file-chosen');
    const preview = document.getElementById('image-preview');
    const container = document.getElementById('preview-container');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            container.classList.remove('hidden');
            display.textContent = "File terpilih: " + input.files[0].name;
            display.classList.add('text-blue-700');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>