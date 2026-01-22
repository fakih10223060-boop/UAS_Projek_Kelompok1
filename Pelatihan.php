<?php
// data program (bisa nanti diganti dari database)
$program = [
    "judul" => "Pelatihan Keterampilan Pemuda Dhuafa",
    "deskripsi" => "Program ini bertujuan untuk membekali pemuda dhuafa dengan keterampilan praktis agar mereka memiliki kemandirian ekonomi dan kesiapan kerja.",
    "tujuan" => [
        "Meningkatkan keterampilan kerja pemuda dhuafa",
        "Membuka peluang usaha mandiri",
        "Meningkatkan taraf hidup dan kepercayaan diri"
    ],
    "kegiatan" => [
        "Pelatihan membuat kerajinan tangan",
        "Pelatihan menjahit dan tata boga",
        "Pelatihan kewirausahaan",
        "Pendampingan dan praktik langsung"
    ],
    "gambar" => [
        "assets/img/pelatihan1.jpg",
        "assets/img/pelatihan2.jpg",
        "assets/img/pelatihan3.jpg"
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
            background: #fff;
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
            color: #16a085;
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
            background: #16a085;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background: #13856b;
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

    <h3>📌 Kegiatan Pelatihan</h3>
    <ul>
        <?php foreach ($program['kegiatan'] as $kegiatan) : ?>
            <li><?php echo $kegiatan; ?></li>
        <?php endforeach; ?>
    </ul>
<h3>📸 Dokumentasi Kegiatan</h3>
    <div class="galeri">
       <img src="asset/galeri/kegiatan1.jpeg" width="400">
       <img src="asset/galeri/kegiatan2.jpeg" width="400">
       <img src="asset/galeri/kegiatan3.jpeg" width="400">
    </div>

    

    <a href="index.php" class="btn">⬅ Kembali ke Program Unggulan</a>
</div>

</body>
</html>
