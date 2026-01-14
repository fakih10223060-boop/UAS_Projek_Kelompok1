<?php
// Harga tetap
$hargaEmas  = 2515000;
$hargaPerak = 40613;

// Default nilai
$totalHarta = 0;
$totalZakat = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emas      = ($_POST['emas'] ?? 0) * $hargaEmas;
    $perak     = ($_POST['perak'] ?? 0) * $hargaPerak;
    $uang      = $_POST['uang'] ?? 0;
    $properti  = $_POST['properti'] ?? 0;
    $kendaraan = $_POST['kendaraan'] ?? 0;
    $saham     = $_POST['saham'] ?? 0;
    $lainnya   = $_POST['lainnya'] ?? 0;

    $totalHarta = $emas + $perak + $uang + $properti + $kendaraan + $saham + $lainnya;
    $totalZakat = $totalHarta * 0.025;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kalkulator Zakat Maal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="max-w-6xl mx-auto mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- FORM -->
        <form method="POST" class="md:col-span-2 bg-white p-8 rounded-xl shadow">
            <h2 class="text-2xl font-bold mb-6 text-orange-500">
                Perhitungan Zakat Harta (Maal)
            </h2>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold">Emas tidak dipakai (gram)</label>
                    <input type="number" name="emas" class="w-full border p-2 rounded">
                    <small class="text-gray-500">Harga emas/gram: Rp 2.515.000</small>
                </div>

                <div>
                    <label class="block text-sm font-semibold">Perak tidak dipakai (gram)</label>
                    <input type="number" name="perak" class="w-full border p-2 rounded">
                    <small class="text-gray-500">Harga perak/gram: Rp 40.613</small>
                </div>

                <div>
                    <label class="block text-sm font-semibold">Uang tunai / tabungan</label>
                    <input type="number" name="uang" class="w-full border p-2 rounded">
                </div>

                <div>
                    <label class="block text-sm font-semibold">Properti</label>
                    <input type="number" name="properti" class="w-full border p-2 rounded">
                </div>

                <div>
                    <label class="block text-sm font-semibold">Kendaraan</label>
                    <input type="number" name="kendaraan" class="w-full border p-2 rounded">
                </div>

                <div>
                    <label class="block text-sm font-semibold">Saham / Surat berharga</label>
                    <input type="number" name="saham" class="w-full border p-2 rounded">
                </div>

                <div>
                    <label class="block text-sm font-semibold">Harta lainnya</label>
                    <input type="number" name="lainnya" class="w-full border p-2 rounded">
                </div>
            </div>

            <button type="submit"
                class="mt-6 w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 rounded">
                Hitung Zakat
            </button>
        </form>

        <!-- HASIL -->
        <div class="bg-white p-8 rounded-xl shadow">
            <h3 class="text-xl font-bold mb-4 text-gray-700">Total Zakat</h3>

            <div class="flex justify-between mb-2">
                <span>Harta (Maal)</span>
                <span class="font-semibold">
                    Rp <?= number_format($totalHarta, 0, ',', '.') ?>
                </span>
            </div>

            <hr class="my-4">

            <div class="bg-orange-500 text-white text-center text-2xl font-bold py-4 rounded">
                Rp <?= number_format($totalZakat, 0, ',', '.') ?>
            </div>
        </div>

    </div>

</body>

</html>