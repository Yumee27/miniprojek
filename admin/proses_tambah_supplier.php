<?php

include '../config/koneksi.php';

if (isset($_POST['submit'])) {
    $id_supplier  = $_POST['id_supplier'];
    $nama_supplier  = $_POST['nama_supplier'];
    $alamat       = $_POST['alamat'];
    $telepon  = $_POST['telepon'];

    // Perbaikan: Menghilangkan tanda koma setelah kolom telepon
    $query = "INSERT INTO supplier (id_supplier, nama_supplier, alamat, telepon) 
              VALUES ('$id_supplier', '$nama_supplier', '$alamat', '$telepon')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "
        <script>
            alert('Data berhasil disimpan');
            window.location='suplier.php'; 
        </script>";
    } else {
        echo "Query Error : " . mysqli_error($koneksi);
    }
} // Kurung kurawal penutup untuk if(isset(...))