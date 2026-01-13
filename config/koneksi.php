<?php
$conn = mysqli_connect("localhost", "root", "", "panti_admin");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}