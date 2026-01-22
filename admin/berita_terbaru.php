<?php
include '../config/koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM berita_terbaru ORDER BY id DESC");

// cek query
if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
?>

<div style="padding: 20px; font-family: sans-serif;">
    <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <h2 style="margin: 0;">Daftar Berita Terbaru</h2>
        <a href="dashboard.php?page=tambahberita_terbaru"
            style="background: #2563eb; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">
            + Tambah Berita
        </a>
    </div>

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <tr style="background: #f3f4f6;">
            <th style="padding: 12px; border: 1px solid #ddd;">No</th>
            <th style="padding: 12px; border: 1px solid #ddd;">Judul</th>
            <th style="padding: 12px; border: 1px solid #ddd;">Aksi</th>
        </tr>

        <?php 
        $no = 1;
        if (mysqli_num_rows($result) > 0):
            while($row = mysqli_fetch_assoc($result)) : 
        ?>
        <tr>
            <td style="padding: 12px; border: 1px solid #ddd; text-align: center;">
                <?= $no++; ?>
            </td>
            <td style="padding: 12px; border: 1px solid #ddd;">
                <?= $row['judul']; ?>
            </td>
            <td style="padding: 12px; border: 1px solid #ddd; text-align: center;">
                <a href="hapusberita_terbaru.php?id=<?= $row['id']; ?>"
                    style="color: #dc2626; font-weight: bold; text-decoration: none;"
                    onclick="return confirm('Yakin ingin menghapus berita ini?')">
                    Hapus
                </a>
            </td>
        </tr>
        <?php endwhile; else: ?>
        <tr>
            <td colspan="3" style="padding: 20px; text-align: center; color: #6b7280;">
                Belum ada data berita.
            </td>
        </tr>
        <?php endif; ?>
    </table>
</div>