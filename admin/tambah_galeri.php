<?php
// INCLUDE KONEKSI (AMAN)
include __DIR__ . '/../config/koneksi.php';

// CEK KONEKSI (ANTI ERROR)
if (!isset($conn)) {
    die("Koneksi database tidak ditemukan");
}

// PROSES UPLOAD
if (isset($_POST['upload'])) {

    $foto = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    if ($foto != "") {
        $namaFile = time() . '-' . $foto;
        $path = __DIR__ . '/../asset/galeri/' . $namaFile;

        if (move_uploaded_file($tmp, $path)) {
            mysqli_query($conn, "INSERT INTO galeri (foto) VALUES ('$namaFile')");
            echo "<script>alert('Foto berhasil diupload');</script>";
        } else {
            echo "<script>alert('Upload gagal');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Galeri</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10">

    <div class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow">

        <h2 class="text-xl font-bold mb-4 text-center">Upload Foto Galeri</h2>

        <form method="POST" enctype="multipart/form-data" class="space-y-4">
            <input type="file" name="foto" required class="w-full border rounded p-2">

            <button type="submit" name="upload" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Upload
            </button>
        </form>

    </div>

</body>

</html>