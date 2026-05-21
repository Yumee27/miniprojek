<?php
include '../config/koneksi.php';
include 'header.php';
include 'dashboard.php';
$id = $_GET['id_peminjam'];

$query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjam='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Peminjam</title>
</head>

<body>
    <div class="container">
        <div class="card">

            <h2>Edit Peminjam </h2>
            <form action="proses_edit_pinjaman.php" method="POST">

                <label>Nama Peminjam</label>
                <input type="text" name="nama_peminjam" required class="form-control form-group" value="<?php echo $data['nama_peminjam']; ?>">
                <label>Nama Barang:</label>
                <input type="text" name="nama_barang" required class="form-control" value="<?php echo $data['nama_barang']; ?>">
                <label>Tanggal Pinjam: </label>
                <input type="date" name="tanggal_pinjam" required class="form-control" value="<?php echo  $data['tanggal_pinjam']; ?>">
                <label>Tanggal Kembali:</label>
                <input type="date" name="tanggal_kembali" required class="form-control" value="<?php echo  $data['tanggal_kembali']; ?>">
                <label>Status: </label>
                <select name="status" required class="form-control">
                    <option value="dipinjam">Dipinjam</option>
                    <option value="dikembalikan">Dikembalikan</option>
                </select>
                <label>Keterangan:</label>
                <input type="text" name="keterangan" required class="form-control" value="<?php echo  $data['keterangan']; ?>">


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