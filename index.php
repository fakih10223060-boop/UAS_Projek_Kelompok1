<?php
include 'config/koneksi.php';
$berita = mysqli_query($conn, "SELECT * FROM berita ORDER BY created_at DESC LIMIT 3");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Aksi Nyata Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <!-- HERO -->
    <section class="relative">
        <img src="asset/galeri/aksinyata1.jpeg" class="w-full h-[420px] object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="absolute inset-0 flex items-center justify-center text-center px-4">
            <div class="text-white max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 uppercase">
                    Mengubah Niat Baik<br>Menjadi Nyata
                </h1>
                <p class="mb-6 text-sm md:text-lg">
                    Setiap donasi Anda adalah harapan baru bagi anak-anak yatim dan dhuafa.
                </p>
                <a href="donasi.php" class="bg-green-500 hover:bg-green-600 px-8 py-3 rounded-lg font-semibold">
                    Donasi Pendidikan Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- PROGRAM UNGGULAN (STATIS RINGKAS) -->
    <section class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-bold text-center mb-10">Program Unggulan Kami</h2>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow">
                <img src="asset/galeri/kegiatan1.jpeg" class="h-48 w-full object-cover">
                <div class="p-4 font-semibold">Beasiswa Pendidikan Anak Yatim</div>
            </div>
            <div class="bg-white rounded-lg shadow">
                <img src="asset/galeri/kegiatan2.jpeg" class="h-48 w-full object-cover">
                <div class="p-4 font-semibold">Santunan Pangan Keluarga Dhuafa</div>
            </div>
            <div class="bg-white rounded-lg shadow">
                <img src="asset/galeri/kegiatan3.jpeg" class="h-48 w-full object-cover">
                <div class="p-4 font-semibold">Pembangunan Panti Asuhan</div>
            </div>
        </div>
    </section>

    <!--  BERITA TERBARU  -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold text-center mb-10">Berita Terbaru</h2>

            <div class="grid md:grid-cols-3 gap-6">
                <?php while ($row = mysqli_fetch_assoc($berita)) { ?>
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                    <img src="upload/berita/<?= $row['foto']; ?>" class="h-48 w-full object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="font-bold mb-2"><?= $row['judul']; ?></h3>
                        <p class="text-sm text-gray-600 line-clamp-3">
                            <?= $row['caption']; ?>
                        </p>
                        <a href="berita-detail.php?id=<?= $row['id']; ?>"
                            class="text-blue-600 text-sm font-semibold inline-block mt-3">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-blue-50 text-blue-900 py-10 mt-16">
        <p class="text-center text-sm">
            © 2025 Aksi Nyata Foundation. All rights reserved.
        </p>
    </footer>

</body>

</html>