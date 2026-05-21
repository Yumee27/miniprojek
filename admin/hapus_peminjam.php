<?php
include '../config/koneksi.php';

$id = $_GET['id_peminjam'];

mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjam='$id'");

header("Location: peminjaman.php");
