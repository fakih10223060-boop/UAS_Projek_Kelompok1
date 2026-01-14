<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Aksi Nyata Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap');

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .bg-gradient-custom {
        background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
    }
    </style>
</head>

<body class="bg-slate-50 text-slate-800">
    <?php
    // --- LOGIKA DATA (PHP) ---
    $data = [
        'visi' => 'Membangun tatanan sosial yang mandiri, adil, dan berkelanjutan melalui penguatan sumber daya manusia dan ekonomi masyarakat.',
        'misi' => [
            'Meningkatkan kualitas hidup masyarakat melalui program sosial, pendidikan, dan kesehatan.',
            'Menciptakan lingkungan sosial yang mendukung anak yatim, difabel, dan masyarakat rentan.',
            'Mengembangkan model pemberdayaan ekonomi dan keterampilan untuk keluarga prasejahtera.'
        ],
        'sejarah' => 'Berdiri pada 13 juni 2025, Aksi Nyata Foundation bermula dari sebuah rumah kecil yang menampung 5 anak yatim. Kini kami telah berkembang menjadi lembaga nasional yang mengelola belasan asrama dan membantu ribuan penerima manfaat di berbagai pelosok daerah melalui aksi sosial yang nyata.',
        'statistik' => [
            ['angka' => 1500, 'label' => 'Penerima Manfaat', 'suffix' => '+'],
            ['angka' => 250, 'label' => 'Program Sosial', 'suffix' => '+'],
            ['angka' => 50, 'label' => 'Miliar Donasi', 'suffix' => 'M+'],
            ['angka' => 12, 'label' => 'Tahun Mengabdi', 'suffix' => '+']
        ],
        'testimoni' => [
            [
                'nama' => 'Cecep Ihsan',
                'jabatan' => 'Alumni Beasiswa',
                'pesan' => 'Terima kasih Aksi Nyata, berkat beasiswanya saya bisa lulus kuliah dan sekarang bekerja di perusahaan IT.'
            ],
            [
                'nama' => 'Ahmad Fakih',
                'jabatan' => 'Donatur Tetap',
                'pesan' => 'Laporannya sangat detail. Saya bisa melihat dampak nyata dari setiap rupiah yang saya donasikan.'
            ]
        ]
    ];
    ?>

    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-2">
                    <img src="asset/logo/logo1.jpeg" alt="Logo Aksi Nyata" class="h-8">
                    <span class="font-bold text-gray-800 uppercase">Aksi Nyata</span>
                </div>

                <div class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="index.php" class="text-blue-600">Beranda</a>
                    <a href="program.php" class="text-gray-600 hover:text-blue-600">Program Unggulan</a>
                    <a href="berita.php" class="text-gray-600 hover:text-blue-600">Berita Terbaru</a>
                    <a href="kalkulator.php" class="text-gray-600 hover:text-blue-600">Kalkulator Zakat</a>
                    <a href="tentang.php" class="text-gray-600 hover:text-blue-600">Tentang Kami</a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="donasi.php"
                        class="bg-green-500 hover:bg-green-600 text-white text-xs md:text-sm font-semibold px-5 py-2.5 rounded-md transition">
                        DONASI SEKARANG
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="container mx-auto px-6 py-16 md:py-24 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-12 md:mb-0">
            <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 mb-6 leading-tight">
                Mengubah <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-500">Niat
                    Baik</span> Menjadi <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-500">Nyata</span>
            </h1>
            <p class="text-slate-600 text-lg mb-8 max-w-lg leading-relaxed">
                Kami adalah lembaga kemanusiaan yang berdedikasi untuk memuliakan anak yatim dan memberdayakan dhuafa
                melalui aksi nyata di seluruh Indonesia.
            </p>
        </div>
        <div class="md:w-1/2">
            <img src="asset/galeri/program5.jpeg" alt="Program Sosial"
                class="rounded-[2rem] shadow-2xl rotate-2 hover:rotate-0 transition duration-500">
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12">
            <div class="p-10 bg-slate-50 rounded-3xl border border-slate-100">
                <div
                    class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6 text-xl">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Visi Kami</h3>
                <p class="text-slate-600 text-lg italic">"<?= $data['visi']; ?>"</p>
            </div>
            <div class="p-10 bg-blue-600 rounded-3xl text-white shadow-xl">
                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-6 text-xl">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Misi Kami</h3>
                <ul class="space-y-4 text-blue-50">
                    <?php foreach ($data['misi'] as $m): ?>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle mt-1 mr-3"></i>
                        <span><?= $m; ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="container mx-auto px-6 text-center max-w-4xl">
            <h2 class="text-3xl font-bold mb-8">Sejarah Singkat</h2>
            <div
                class="bg-white p-12 rounded-[2.5rem] shadow-sm border border-slate-100 leading-loose text-lg text-slate-600">
                <?= $data['sejarah']; ?>
            </div>
        </div>
    </section>

    <section id="stat-section" class="bg-gradient-custom py-20 text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
                <?php foreach ($data['statistik'] as $s): ?>
                <div>
                    <div class="text-5xl font-black mb-2 tracking-tight">
                        <span class="counter" data-target="<?= $s['angka']; ?>">0</span><?= $s['suffix']; ?>
                    </div>
                    <div class="text-blue-100 font-medium uppercase text-xs tracking-widest">
                        <?= $s['label']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16">Apa Kata Mereka</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <?php foreach ($data['testimoni'] as $t): ?>
                <div class="p-8 bg-slate-50 rounded-3xl border border-slate-100 relative">
                    <i class="fas fa-quote-left absolute top-8 left-8 text-slate-200 text-5xl"></i>
                    <p class="text-slate-600 mb-8 italic text-lg relative z-10">
                        "<?= $t['pesan']; ?>"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            <?= substr($t['nama'], 0, 1); ?>
                        </div>
                        <div>
                            <h4 class="font-bold"><?= $t['nama']; ?></h4>
                            <p class="text-sm text-blue-600"><?= $t['jabatan']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer class="bg-blue-50 text-gray-700">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <p class="text-sm leading-relaxed">
                        LAZNAS & Panti Yatim berkomitmen untuk menyalurkan amanah donasi Anda dengan transparan dan
                        efektif.
                    </p>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Jl. Ophir II No. 6A RT 007/RW 001, Kelurahan Gunung, Kecamatan Kebayoran Baru, Jakarta
                            Selatan</li>
                        <li>
                            <a href="mailto:info@aksinyata.org" class="hover:text-blue-600">
                                info@aksinyata.org
                            </a>
                        </li>
                        <li>
                            <a href="tel:087711999023" class="hover:text-blue-600">
                                0877-1199-9023
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-600">Program Kami</a></li>
                        <li><a href="#" class="hover:text-blue-600">Berita & Acara</a></li>
                        <li><a href="#" class="hover:text-blue-600">Kalkulator Zakat</a></li>
                        <li><a href="#" class="hover:text-blue-600">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-blue-600">FAQ</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Sosial Media</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-600">Facebook</a></li>
                        <li><a href="#" class="hover:text-blue-600">Instagram</a></li>
                        <li><a href="#" class="hover:text-blue-600">Twitter</a></li>
                        <li><a href="#" class="hover:text-blue-600">Youtube</a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-10">
                <h3 class="font-semibold mb-3">Legalitas</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-600">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-blue-600">Syarat & Ketentuan</a></li>
                    <li><a href="#" class="hover:text-blue-600">Transparansi</a></li>
                </ul>
            </div>

            <div class="border-t border-gray-300 mt-8 pt-6 text-center text-sm text-gray-500">
                © 2025 LAZNAS & Panti Yatim. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
    const counters = document.querySelectorAll('.counter');
    const speed = 100;

    const startCounting = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    // Trigger animasi saat section statistik muncul di layar
    let observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
            startCounting();
        }
    }, {
        threshold: 0.5
    });

    observer.observe(document.getElementById('stat-section'));
    </script>
</body>

</html>