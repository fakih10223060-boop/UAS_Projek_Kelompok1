<?php
include "../config/koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Donasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-7xl mx-auto bg-white shadow-xl rounded-xl p-6">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            📊 Data Donasi Masuk
        </h1>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">No</th>
                        <th class="px-4 py-3 text-left">Nama</th>
                        <th class="px-4 py-3 text-left">Email</th>
                        <th class="px-4 py-3 text-left">Nominal</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-left">Tanggal</th>
                        <th class="px-4 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php $no = 1; while($row = mysqli_fetch_assoc($query)) : ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3"><?= $no++ ?></td>
                        <td class="px-4 py-3 font-medium"><?= $row['nama'] ?></td>
                        <td class="px-4 py-3"><?= $row['email'] ?></td>
                        <td class="px-4 py-3 font-semibold text-green-600">
                            Rp<?= number_format($row['jumlah'] ?? 0, 0, ',', '.') ?>
                        </td>
                        <td class="px-4 py-3">
                            <?php if($row['status'] == 'success'): ?>
                            <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-700">
                                Success
                            </span>
                            <?php elseif($row['status'] == 'pending'): ?>
                            <span class="px-3 py-1 rounded-full text-xs bg-yellow-100 text-yellow-700">
                                Pending
                            </span>
                            <?php else: ?>
                            <span class="px-3 py-1 rounded-full text-xs bg-red-100 text-red-700">
                                Failed
                            </span>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-3 text-gray-600">
                            <?= date('d-m-Y H:i', strtotime($row['created_at'])) ?>
                        </td>
                        <td class="px-4 py-3 text-center">
                            <a href="hapus_donasi.php?id=<?= $row['id']; ?>"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data donasi dari <?= $row['nama']; ?>?')"
                                class="inline-flex items-center bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs transition duration-200">
                                <i class="fa-solid fa-trash mr-1"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>