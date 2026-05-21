<?php
include '../config/koneksi.php';
include 'header.php';
include 'dashboard.php';
$id = $_GET['id_supplier'];

$query = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id_supplier='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Supplier</title>
</head>

<body>
    <div class="container">
        <div class="card">

            <h2>edit Supplier </h2>
            <form action="proses_edit_supplier.php" method="POST">

                <input type="hidden" name="id_supplier" hidden class="form-control form-group" value="<?php echo $data['id_supplier']; ?>">
                <label>ID SUPPLIER</label>
                <input type="text" name="id_supplier" required class="form-control form-group" value="<?php echo $data['id_supplier']; ?>">
                <label>Nama SUPPLIER:</label>
                <input type="text" name="nama_supplier" required class="form-control" value="<?php echo $data['nama_supplier']; ?>">
                <label>ALAMAT: </label>
                <input type="text" name="alamat" required class="form-control" value="<?php echo  $data['alamat']; ?>">
                <label>TELEPON:</label>
                <input type="text" name="telepon" required class="form-control" value="<?php echo  $data['telepon']; ?>">


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