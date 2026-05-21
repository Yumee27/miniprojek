<?php
include "../config/koneksi.php";
include "header.php";
include "dashboard.php";
?>
<a href="tambah_supplier.php" class="btn btn-success">TAMBAH SUPPLIER</a>
<br>


</div>

<div class="box-body">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID SUPPLIER</th>
                <th>NAMA SUPPLIER</th>
                <th>ALAMAT</th>
                <th>TELEPON</th>
                <th>Opsi</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $no = 1;

            $query = mysqli_query($koneksi, "SELECT * FROM supplier");

            while ($data = mysqli_fetch_array($query)) {
            ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['id_supplier'] ?></td>
                    <td><?= $data['nama_supplier']; ?></td>
                    <td><?= $data['alamat']; ?></td>
                    <td><?= $data['telepon']; ?></td>
                    <td>
                        <a href="edit_supplier.php?id_supplier=<?php echo $data['id_supplier']; ?>" class="btn btn-warning">Update</a>
                        <a href="hapus_supplier.php?id_supplier=<?php echo $data['id_supplier']; ?>" class="btn btn-danger" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
</div>
</div>

</div>
</div>
</section>
</div>
<?php
include 'footer.php';
?>