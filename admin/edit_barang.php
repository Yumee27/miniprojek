<?php
include '../config/koneksi.php';
include 'header.php';
include 'dashboard.php';
$id = $_GET['id_barang'];

$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Barang</title>
</head>

<body>
    <div class="container">
        <div class="card">

            <h2>edit Barang </h2>
            <form action="proses_edit_barang.php" method="POST">

                <input type="hidden" name="id_barang" hidden class="form-control form-group" value="<?php echo $data['id_barang']; ?>">
                <label>KODE BARANG</label>
                <input type="text" name="kode_barang" required class="form-control form-group" value="<?php echo $data['kode_barang']; ?>">
                <label>Nama Barang:</label>
                <input type="text" name="nama_barang" required class="form-control" value="<?php echo $data['nama_barang']; ?>">
                <label>ID KATEGORI: </label>
                <input type="text" name="id_kategori" required class="form-control" value="<?php echo  $data['id_kategori']; ?>">
                <label>ID SUPPLIER:</label>
                <input type="text" name="id_supplier" required class="form-control" value="<?php echo  $data['id_supplier']; ?>">
                <label>Satuan:</label>
                <input type="text" name="satuan" required class="form-control" value="<?php echo  $data['satuan']; ?>">
                <label>Stok:</label>
                <input type="number" name="stok" required class="form-control" value="<?php echo  $data['stok']; ?>">
                <label>Harga Beli:</label>
                <input type="text" name="harga_beli" required class="form-control" value="<?php echo  $data['harga_beli']; ?>">
                <label>Harga Jual:</label>
                <input type="text" name="harga_jual" required class="form-control" value="<?php echo  $data['harga_jual']; ?>">

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