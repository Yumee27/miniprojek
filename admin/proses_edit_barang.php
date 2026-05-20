<?php
include "../config/koneksi.php";

if (isset($_POST['submit'])) {

    $id_barang  = $_POST['id_barang'];
    $kode_barang  = $_POST['kode_barang'];
    $nama         = $_POST['nama_barang'];
    $id_kategori  = $_POST['id_kategori'];
    $id_supplier  = $_POST['id_supplier'];
    $satuan       = $_POST['satuan'];
    $stok         = $_POST['stok'];
    $harga_beli   = $_POST['harga_beli'];
    $harga_jual   = $_POST['harga_jual'];

    mysqli_query($koneksi, "UPDATE barang SET 
       
    kode_barang='$kode_barang',
    nama_barang='$nama',
    id_kategori='$id_kategori',
    id_supplier='$id_supplier',
    satuan='$satuan',
    stok='$stok',
    harga_beli='$harga_beli',
    harga_jual='$harga_jual'
WHERE id_barang='$id_barang'");


    header("Location: barang.php");
}
