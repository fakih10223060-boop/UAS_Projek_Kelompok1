<?php
include '../config/koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM program ORDER BY id DESC");
?>

<div class="max-w-7xl mx-auto mt-8">

    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">
            Data Program
        </h2>

        <a href="dashboard.php?page=tambah_program" class="inline-flex items-center gap-2 px-5 py-2.5
                  bg-blue-600 text-white rounded-lg
                  hover:bg-blue-700 transition shadow-md">
            + Tambah Program
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <table class="w-full text-sm text-left">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                <tr>
                    <th class="px-6 py-4">No</th>
                    <th class="px-6 py-4">Judul</th>
                    <th class="px-6 py-4">Target</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y">
                <?php $no = 1; while($p = mysqli_fetch_assoc($result)): ?>
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4"><?= $no++ ?></td>

                    <td class="px-6 py-4 font-semibold text-gray-800">
                        <?= htmlspecialchars($p['judul']) ?>
                    </td>

                    <td class="px-6 py-4">
                        Rp <?= number_format($p['target_dana'], 0, ',', '.') ?>
                    </td>

                    <td class="px-6 py-4">
                        <?php if ($p['status'] == 'aktif'): ?>
                        <span class="px-3 py-1 text-xs font-semibold
                                text-green-700 bg-green-100 rounded-full">
                            Aktif
                        </span>
                        <?php else: ?>
                        <span class="px-3 py-1 text-xs font-semibold
                                text-gray-600 bg-gray-200 rounded-full">
                            Nonaktif
                        </span>
                        <?php endif; ?>
                    </td>

                    <td class="px-6 py-4 text-center space-x-2">
                        <a href="dashboard.php?page=edit_program&id=<?= $p['id'] ?>" class="inline-block px-3 py-1.5 text-sm
                                  text-blue-600 border border-blue-600
                                  rounded-lg hover:bg-blue-600 hover:text-white transition">
                            Edit
                        </a>

                        <a href="hapus_program.php?id=<?= $p['id'] ?>"
                            onclick="return confirm('Yakin ingin menghapus program ini?')" class="inline-block px-3 py-1.5 text-sm
                                  text-red-600 border border-red-600
                                  rounded-lg hover:bg-red-600 hover:text-white transition">
                            Hapus
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</div>