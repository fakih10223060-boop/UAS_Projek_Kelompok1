<?php
$conn = mysqli_connect("localhost", "root", "", "database");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>