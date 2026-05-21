<?php
include "../config/koneksi.php";

if (isset($_POST['submit'])) {

    $id_supplier    = $_POST['id_supplier'];
    $nama_supplier  = $_POST['nama_supplier'];
    $alamat         = $_POST['alamat'];
    $telepon        = $_POST['telepon'];

    // Perbaikan: Menghilangkan tanda koma setelah variabel $telepon
    mysqli_query($koneksi, "UPDATE supplier SET 
        id_supplier='$id_supplier',
        nama_supplier='$nama_supplier',
        alamat='$alamat',
        telepon='$telepon' 
    WHERE id_supplier='$id_supplier'");

    // Perbaikan: Mengubah supplier.php menjadi suplier.php sesuai nama file Anda
    header("Location: suplier.php");
} // Kurung kurawal penutup untuk if (isset(...))