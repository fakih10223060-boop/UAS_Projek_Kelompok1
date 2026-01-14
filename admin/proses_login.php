<?php
session_start();
include '../config/koneksi.php';

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = mysqli_query(
        $conn,
        "SELECT * FROM admin 
         WHERE username='$username' 
         AND password='$password'"
    );

    if (mysqli_num_rows($query) == 1) {
        $data = mysqli_fetch_assoc($query);

        $_SESSION['admin'] = $data['username'];

        header("Location: dashboard.php");
        exit;
    } else {
        header("Location: login.php?pesan=gagal");
        exit;
    }

} else {
    header("Location: login.php");
    exit;
}