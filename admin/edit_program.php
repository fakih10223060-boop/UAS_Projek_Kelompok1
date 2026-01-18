<?php
include '../config/koneksi.php';

// cek id
if (!isset($_GET['id'])) {
  header("Location: program.php");
  exit;
}

$id = $_GET['id'];

// ambil data lama
$query = mysqli_query($conn, "SELECT * FROM program WHERE id='$id'");
$program = mysqli_fetch_assoc($query);

if (!$program) {
  header("Location: program.php");
  exit;
}

// proses update
if (isset($_POST['update'])) {

  $judul      = $_POST['judul'];
  $target     = $_POST['target'];
  $deskripsi  = $_POST['deskripsi'];
  $status     = $_POST['status'];

  // cek upload gambar baru
  if (!empty($_FILES['gambar']['name'])) {
    $gambar = time() . '_' . $_FILES['gambar']['name'];
    $tmp    = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmp, "../asset/galeri/" . $gambar);

    // hapus gambar lama
    if (!empty($program['gambar'])) {
      $lama = "../asset/galeri/" . $program['gambar'];
      if (file_exists($lama)) {
        unlink($lama);
      }
    }

    $update = mysqli_query($conn, "
      UPDATE program SET
        judul='$judul',
        target='$target',
        deskripsi='$deskripsi',
        status='$status',
        gambar='$gambar'
      WHERE id='$id'
    ");

  } else {
    // tanpa ganti gambar
    $update = mysqli_query($conn, "
      UPDATE program SET
        judul='$judul',
        target='$target',
        deskripsi='$deskripsi',
        status='$status'
      WHERE id='$id'
    ");
  }

  header("Location: dashboard.php?page=program");
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Program</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Edit Program</h1>

        <form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow space-y-4">

            <div>
                <label class="block text-sm mb-1">Judul Program</label>
                <input type="text" name="judul" value="<?= $program['judul'] ?>" class="w-full border rounded p-2"
                    required>
            </div>

            <div>
                <label class="block text-sm mb-1">Target Donasi</label>
                <input type="number" name="target" value="<?= $program['target'] ?>" class="w-full border rounded p-2"
                    required>
            </div>

            <div>
                <label class="block text-sm mb-1">Deskripsi</label>
                <textarea name="deskripsi" rows="4"
                    class="w-full border rounded p-2"><?= $program['deskripsi'] ?></textarea>
            </div>

            <div>
                <label class="block text-sm mb-1">Status</label>
                <select name="status" class="w-full border rounded p-2">
                    <option value="aktif" <?= $program['status']=='aktif'?'selected':'' ?>>
                        Aktif
                    </option>
                    <option value="nonaktif" <?= $program['status']=='nonaktif'?'selected':'' ?>>
                        Nonaktif
                    </option>
                </select>
            </div>

            <div>
                <label class="block text-sm mb-1">Gambar Program</label>
                <input type="file" name="gambar" class="w-full border rounded p-2">
                <?php if (!empty($program['gambar'])): ?>
                <img src="../asset/galeri/<?= $program['gambar'] ?>" class="w-40 mt-2 rounded">
                <?php endif; ?>
                <p class="text-xs text-gray-500 mt-1">
                    Kosongkan jika tidak ingin mengganti gambar
                </p>
            </div>

            <div class="flex gap-3">
                <button type="submit" name="update" class="bg-blue-600 text-white px-5 py-2 rounded">
                    Update
                </button>
                <a href="program.php" class="px-5 py-2 border rounded">
                    Batal
                </a>
            </div>

        </form>
    </div>

</body>

</html>