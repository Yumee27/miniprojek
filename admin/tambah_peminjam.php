<?php
include '../config/koneksi.php';
include 'header.php';
include 'dashboard.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Peminjam</title>
</head>

<body>
    <div class="container">
        <div class="card">

            <h2>Tambah Peminjam</h2>
            <form action="proses_tambah_peminjam.php" method="POST">



                <label>Nama Peminjam:</label>
                <input type="text" name="nama_peminjam" required class="form-control">
                <label>Nama Barang: </label>
                <input type="text" name="nama_barang" required class="form-control">
                <label>Tanggal Pinjam:</label>
                <input type="date" name="tanggal_pinjam" required class="form-control">
                <label>Tanggal Kembali:</label>
                <input type="date" name="tanggal_kembali" required class="form-control">
                <label>Status:</label>
                <select name="status" required class="form-control">
                    <option value="dipinjam">Dipinjam</option>
                    <option value="dikembalikan">Dikembalikan</option>
                </select> <br>
                <label>Keterangan:</label>
                <input type="text" name="keterangan" required class="form-control">


                <br>
                <button type="submit" name="submit" value="SIMPAN" class="btn btn-primary fa fa-save"> SIMPAN</button>
            </form>
        </div>
    </div>
</body>

</html>


</div>
</div>
</section>
</div>
<?php
include 'footer.php';
?>