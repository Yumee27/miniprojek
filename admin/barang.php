<?php
include '../config/koneksi.php';
include "header.php";
include "dashboard.php";
?>
<a href="tambah_barang.php" class="btn btn-success">TAMBAH BARANG</a>
<br>


</div>

<div class="box-body">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Opsi</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $no = 1;

            $query = mysqli_query($koneksi, "SELECT * FROM barang");

            while ($data = mysqli_fetch_array($query)) {
            ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['kode_barang']; ?></td>
                    <td><?= $data['nama_barang']; ?></td>
                    <td><?= $data['satuan']; ?></td>
                    <td><?= $data['stok']; ?></td>
                    <td><?= $data['harga_beli']; ?></td>
                    <td><?= $data['harga_jual']; ?></td>
                    <td>
                        <a href="edit_barang.php?id_barang=<?php echo $data['id_barang']; ?>" class="btn btn-warning">Update</a>
                        <a href="hapus_barang.php?id_barang=<?php echo $data['id_barang']; ?>" class="btn btn-danger" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
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
include "footer.php";
?>