<?php
include '../config/koneksi.php';
include 'header.php';
include 'dashboard.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Barang</title>
</head>

<body>
    <div class="container">
        <div class="card">

            <h2>Tambah Barang Baru</h2>
            <form action="proses_tambah_barang.php" method="POST">

                <input type="hidden" name="id_barang" hidden class="form-control form-group">
                <label>KODE BARANG</label>
                <input type="text" name="kode_barang" required class="form-control form-group">
                <label>Nama Barang:</label>
                <input type="text" name="nama_barang" required class="form-control">
                <label>ID KATEGORI: </label>
                <input type="text" name="id_kategori" required class="form-control">
                <label>ID SUPPLIER:</label>
                <input type="text" name="id_supplier" required class="form-control">
                <label>Satuan:</label>
                <input type="text" name="satuan" required class="form-control">
                <label>Stok:</label>
                <input type="number" name="stok" required class="form-control">
                <label>Harga Beli:</label>
                <input type="text" name="harga_beli" required class="form-control">
                <label>Harga Jual:</label>
                <input type="text" name="harga_jual" required class="form-control">

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