<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="Mid-client-GsLHX4yeOtUsZYIs"></script>

<?php
include "../config/koneksi.php";
include "../config/Midtrans.php";


$nama   = $_POST['nama'];
$email  = $_POST['email'];
$jumlah = $_POST['jumlah'];

$order_id = "DONASI-" . time();

// simpan ke DB (status pending)
mysqli_query($conn, "INSERT INTO donasi 
(nama,email,jumlah,order_id,status) 
VALUES ('$nama','$email','$jumlah','$order_id','pending')");

$params = array(
  'transaction_details' => array(
    'order_id' => $order_id,
    'gross_amount' => $jumlah,
  ),
  'customer_details' => array(
    'first_name' => $nama,
    'email' => $email,
  ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
?>

<!DOCTYPE html>
<html>

<head>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="ISI_CLIENT_KEY_SANDBOX"></script>
</head>

<body>

    <button id="pay-button">Bayar Sekarang</button>

    <script>
    document.getElementById('pay-button').onclick = function() {
        snap.pay('<?= $snapToken ?>');
    };
    </script>

</body>

</html>