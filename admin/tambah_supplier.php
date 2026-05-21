<?php
include '../config/koneksi.php';
include 'header.php';
include 'dashboard.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Supplier</title>
</head>

<body>
    <div class="container">
        <div class="card">

            <h2>Tambah Supplier</h2>
            <form action="proses_tambah_supplier.php" method="POST">

                <input type="hidden" name="id_supplier" hidden class="form-control form-group">
                <label>ID SUPPLIER</label>
                <input type="text" name="id_supplier" required class="form-control form-group">
                <label>Nama Supplier:</label>
                <input type="text" name="nama_supplier" required class="form-control">
                <label>ALAMAT: </label>
                <input type="text" name="alamat" required class="form-control">
                <label>TELEPON:</label>
                <input type="text" name="telepon" required class="form-control">


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