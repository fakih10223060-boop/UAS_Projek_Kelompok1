<?php
// Data program Peduli Anak Terlantar
$program = [
    "judul" => "Peduli Anak Terlantar",
    "deskripsi" => "Program Peduli Anak Terlantar merupakan bentuk kepedulian sosial untuk membantu anak-anak yang kehilangan pengasuhan, hidup di jalanan, atau berasal dari keluarga kurang mampu agar mendapatkan perhatian, pendidikan, dan kasih sayang yang layak.",
    "tujuan" => [
        "Memberikan bantuan kebutuhan dasar anak terlantar",
        "Menyediakan dukungan pendidikan dan mental",
        "Menciptakan lingkungan yang aman dan penuh kasih",
        "Mendukung tumbuh kembang anak secara optimal"
    ],
    "kegiatan" => [
        "Santunan dan pembagian kebutuhan pokok",
        "Kegiatan belajar dan bermain bersama",
        "Pendampingan psikososial",
        "Pemberian alat tulis dan perlengkapan sekolah",
        "Kegiatan keagamaan dan pembinaan karakter"
    ],
    "gambar" => [
        "assets/img/anak1.jpg",
        "assets/img/anak2.jpg",
        "assets/img/anak3.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $program['judul']; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        .deskripsi {
            text-align: justify;
            margin-bottom: 20px;
        }
        h3 {
            color: #e67e22;
        }
        ul {
            margin-left: 20px;
        }
        .galeri {
            display: flex;
            gap: 15px;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        .galeri img {
            width: 30%;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }
        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 18px;
            background: #e67e22;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background: #cf711f;
        }
    </style>
</head>
<body>

<div class="container">
    <h1><?php echo $program['judul']; ?></h1>

    <p class="deskripsi">
        <?php echo $program['deskripsi']; ?>
    </p>

    <h3>🎯 Tujuan Program</h3>
    <ul>
        <?php foreach ($program['tujuan'] as $tujuan) : ?>
            <li><?php echo $tujuan; ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>📌 Kegiatan</h3>
    <ul>
        <?php foreach ($program['kegiatan'] as $kegiatan) : ?>
            <li><?php echo $kegiatan; ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>📸 Dokumentasi Kegiatan</h3>
    <div class="galeri">
       <img src="asset/galeri/program1.jpeg" width="400">
       <img src="asset/galeri/program2.jpeg" width="400">
       <img src="asset/galeri/program3.jpeg" width="400">
    </div>

    <a href="index.php" class="btn">⬅ Kembali ke Program Unggulan</a>
</div>

</body>
</html>
