<?php
include "../config/koneksi.php";

/**
 * Fungsi hitung total data
 */
function total($conn, $table)
{
    $query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM $table");

    if (!$query) {
        return 0;
    }

    $data = mysqli_fetch_assoc($query);
    return $data['total'];
}

// TOTAL DATA (SESUAI DATABASE)
$totalBerita = total($conn, 'berita');
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- PAGE TITLE -->
<div class="mb-10">
    <h1 class="text-3xl font-semibold text-slate-800">Dashboard</h1>
    <p class="text-sm text-slate-500 mt-1">
        Ringkasan data sistem <span class="font-medium">AKSI NYATA</span>
    </p>
</div>

<!-- STAT CARD -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">

    <!-- TOTAL BERITA -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border">
        <p class="text-sm text-slate-500">Total Berita</p>
        <h2 class="text-3xl font-bold text-blue-600 mt-2">
            <?= $totalBerita ?>
        </h2>
    </div>

</div>

<!-- GRAFIK STATISTIK -->
<div class="bg-white rounded-2xl p-6 shadow-sm border mt-6">
    <h3 class="text-lg font-semibold text-slate-800 mb-4">
        Statistik Data Sistem
    </h3>

    <canvas id="dashboardChart" height="120"></canvas>
</div>

<script>
const ctx = document.getElementById('dashboardChart').getContext('2d');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Berita'],
        datasets: [{
            label: 'Jumlah Data',
            data: [<?= $totalBerita ?>],
            backgroundColor: ['#3b82f6'],
            borderRadius: 10
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1
                }
            }
        }
    }
});
</script>