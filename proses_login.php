<?php
// proses-login.php

session_start();
include 'config/koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($query);

    $_SESSION['username'] = $data['username'];
    $_SESSION['login'] = true;
    header("location: admin/index.php");
    exit;
} else {

    echo "
    <script>
    alert ('username atau password salah!');
    window.location='index.php';
    </script>
    ";
}
