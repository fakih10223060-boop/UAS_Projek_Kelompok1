 <?php
include 'config/koneksi.php';

// Ambil data galeri di awal agar rapi
if (isset($conn)) {
    $query_galeri = mysqli_query($conn, "SELECT * FROM galeri WHERE status='aktif'");
    $data = mysqli_query($conn, "SELECT * FROM program WHERE status='aktif'");
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tentang Kami | Aksi Nyata</title>
     <script src="https://cdn.tailwindcss.com"></script>
 </head>

 <body class="bg-gray-100"></body>

 <nav class="bg-white shadow sticky top-0 z-50">
     <div class="max-w-7xl mx-auto px-6">
         <div class="flex items-center justify-between h-16">
             <div class="flex items-center gap-2">
                 <img src="asset/logo/logo1.jpeg" alt="Logo Aksi Nyata" class="h-8">
                 <span class="font-bold text-gray-800 uppercase">Aksi Nyata</span>
             </div>

             <div class="hidden md:flex space-x-8 text-sm font-medium">
                 <a href="index.php" class="text-gray-600 hover:text-blue-600">Beranda</a>
                 <a href="kalkulator.php" class="text-gray-600 hover:text-blue-600">Program Unggulan</a>
                 <a href="berita.php" class="text-gray-600 hover:text-blue-600">Berita Terbaru</a>
                 <a href="kalkulator.php" class="text-gray-600 hover:text-blue-600">Kalkulator Zakat</a>
                 <a href="program.php" class="text-blue-600">Tentang Kami</a>
             </div>

             <div class="flex items-center gap-4">
                 <a href="form_donasi.php"
                     class="bg-green-500 hover:bg-green-600 text-white text-xs md:text-sm font-semibold px-5 py-2.5 rounded-md transition">
                     DONASI SEKARANG
                 </a>
             </div>
         </div>
     </div>
 </nav>

 <section class="relative">
     <img src="asset/galeri/program3.jpeg" alt="Donasi Pendidikan" class="w-full h-[420px] object-cover" />
 </section>

 <section class="max-w-5xl mx-auto px-6 py-12">
     <h2 class="text-3xl font-bold mb-8 text-center text-blue-900">Detail Program Kami</h2>

     <section class="max-w-7xl mx-auto px-4 py-12">


         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
             <?php while ($p = mysqli_fetch_assoc($data)) { ?>
             <div class="bg-white rounded-2xl shadow-md overflow-hidden
                    hover:shadow-xl transition duration-300 group">

                 <!-- Gambar -->
                 <div class="relative overflow-hidden">
                     <img src="asset/galeri/<?= $p['gambar'] ?>" class="h-52 w-full object-cover
                            group-hover:scale-105 transition duration-500">

                     <div class="absolute inset-0 bg-black/0
                            group-hover:bg-black/20 transition"></div>
                 </div>

                 <!-- Konten -->
                 <div class="p-6 space-y-4">
                     <h2 class="text-lg font-semibold text-gray-800 line-clamp-2">
                         <?= $p['judul'] ?>
                     </h2>

                     <p class="text-sm text-gray-600 leading-relaxed line-clamp-3">
                         <?= substr($p['deskripsi'], 0, 100) ?>...
                     </p>

                     <a href="detail_program.php?id=<?= $p['id'] ?>" class="block text-center mt-4 py-2.5 rounded-xl
                          bg-gradient-to-r from-green-600 to-green-500
                          text-white font-semibold
                          hover:from-green-700 hover:to-green-600
                          transition shadow-md">
                         Lihat Detail
                     </a>
                 </div>
             </div>
             <?php } ?>
         </div>
     </section>


     <h2 class="text-2xl font-bold mt-16 mb-8 text-center text-blue-900">Galeri Kegiatan</h2>
     <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
         <?php
if (isset($query_galeri)) {
    if (mysqli_num_rows($query_galeri) > 0) {
        while ($g = mysqli_fetch_assoc($query_galeri)) {
?>
         <div class="overflow-hidden rounded-xl shadow-lg">
             <img src="asset/galeri/<?= $g['foto']; ?>"
                 class="object-cover w-full h-52 hover:scale-110 transition duration-500" alt="Galeri Kegiatan">
         </div>
         <?php
        }
    } else {
        echo "<p class='text-center col-span-full text-gray-500 italic'>Belum ada foto galeri aktif.</p>";
    }
} else {
    echo "<p class='text-center text-red-500 col-span-full'>Koneksi database tidak terdeteksi.</p>";
}
?>
     </div>
 </section>

 <footer class="bg-blue-50 text-gray-700 border-t border-blue-100">
     <div class="max-w-7xl mx-auto px-6 py-12">
         <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
             <div>
                 <h3 class="font-bold mb-4 text-blue-900">Tentang Kami</h3>
                 <p class="text-sm leading-relaxed">
                     LAZNAS & Panti Yatim berkomitmen untuk menyalurkan amanah donasi Anda dengan transparan dan
                     efektif demi masa depan anak-anak yang lebih baik.
                 </p>
             </div>

             <div>
                 <h3 class="font-bold mb-4 text-blue-900">Kontak</h3>
                 <ul class="space-y-2 text-sm">
                     <li>Jl. Ophir II No. 6A, Kebayoran Baru, Jakarta Selatan</li>
                     <li>Email: <a href="mailto:info@aksinyata.org"
                             class="text-blue-600 hover:underline">info@aksinyata.org</a></li>
                     <li>Telp: 0877-1199-9023</li>
                 </ul>
             </div>

             <div>
                 <h3 class="font-bold mb-4 text-blue-900">Tautan Cepat</h3>
                 <ul class="space-y-2 text-sm">
                     <li><a href="program.php" class="hover:text-blue-600">Program Kami</a></li>
                     <li><a href="berita.php" class="hover:text-blue-600">Berita & Acara</a></li>
                     <li><a href="kalkulator.php" class="hover:text-blue-600">Kalkulator Zakat</a></li>
                     <li><a href="#" class="hover:text-blue-600">Legalitas & Privasi</a></li>
                 </ul>
             </div>

             <div>
                 <h3 class="font-bold mb-4 text-blue-900">Sosial Media</h3>
                 <div class="flex space-x-4">
                     <a href="#" class="text-gray-600 hover:text-blue-600">Instagram</a>
                     <a href="#" class="text-gray-600 hover:text-blue-600">Facebook</a>
                     <a href="#" class="text-gray-600 hover:text-blue-600">YouTube</a>
                 </div>
             </div>
         </div>

         <hr class="my-8 border-blue-200">
         <p class="text-center text-xs text-blue-700 font-medium">
             © 2025 LAZNAS & Panti Yatim. All rights reserved.
         </p>
     </div>
 </footer>

 </body>

 </html>