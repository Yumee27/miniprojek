<?php
include '../config/koneksi.php';

if (isset($_POST['submit'])) {
    // Mengambil nama_peminjam sebagai pengganti id_peminjam jika id_peminjam tidak dikirim di form,
    // ATAU kita tangkap data post lainnya untuk di-update.
    $nama_peminjam   = $_POST['nama_peminjam'];
    $nama_barang     = $_POST['nama_barang'];
    $tanggal_pinjam  = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $status          = $_POST['status'];
    $keterangan      = $_POST['keterangan'];

    // Karena id_peminjam tidak dikirim melalui input form di edit_peminjam.php, 
    // kita melakukan query UPDATE dengan mengidentifikasi data berdasarkan nama_peminjam yang unik.
    $query = "UPDATE peminjaman SET 
                nama_barang = '$nama_barang', 
                tanggal_pinjam = '$tanggal_pinjam', 
                tanggal_kembali = '$tanggal_kembali', 
                status = '$status', 
                keterangan = '$keterangan' 
              WHERE nama_peminjam = '$nama_peminjam'";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "
        <script>
            alert('Data berhasil diupdate');
            window.location='peminjaman.php'; 
        </script>";
    } else {
        echo "Query Error : " . mysqli_error($koneksi);
    }
}
