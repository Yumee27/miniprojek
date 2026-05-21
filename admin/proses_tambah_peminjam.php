<?php

include '../config/koneksi.php';

if (isset($_POST['submit'])) {
    $nama_peminjam  = $_POST['nama_peminjam'];
    $nama_barang       = $_POST['nama_barang'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $status = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    // PERBAIKAN: Mengubah 'tanggal_kembali' pertama menjadi 'tanggal_pinjam'
    // serta memasukkan variabel '$tanggal_pinjam' ke dalam VALUES
    $query = "INSERT INTO peminjaman ( nama_peminjam, nama_barang, tanggal_pinjam, tanggal_kembali, status, keterangan) 
              VALUES ( '$nama_peminjam', '$nama_barang', '$tanggal_pinjam', '$tanggal_kembali', '$status', '$keterangan')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "
        <script>
            alert('Data berhasil disimpan');
            window.location='peminjaman.php'; 
        </script>";
    } else {
        echo "Query Error : " . mysqli_error($koneksi);
    }
} // Kurung kurawal penutup untuk if(isset(...))
