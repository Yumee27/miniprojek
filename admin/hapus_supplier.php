<?php
include '../config/koneksi.php';

$id = $_GET['id_supplier'];

mysqli_query($koneksi, "DELETE FROM supplier WHERE id_supplier='$id'");

header("Location: suplier.php");
