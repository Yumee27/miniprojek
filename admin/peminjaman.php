<?php
include '../config/koneksi.php';
include "header.php";
include "dashboard.php";
?>
<a href="tambah_peminjam.php" class="btn btn-success">TAMBAH PEMINJAMAN</a>
<br>


</div>

<div class="box-body">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NAMA PEMINJAM</th>
                <th>NAMA BARANG</th>
                <th>TANGGAL PINJAM</th>
                <th>TANGGAL KEMBALI</th>
                <th>STATUS</th>
                <th>KETERANGAN</th>
                <th>Opsi</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $no = 1;

            $query = mysqli_query($koneksi, "SELECT * FROM peminjaman");

            while ($data = mysqli_fetch_array($query)) {
            ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama_peminjam']; ?></td>
                    <td><?= $data['nama_barang']; ?></td>
                    <td><?= $data['tanggal_pinjam']; ?></td>
                    <td><?= $data['tanggal_kembali']; ?></td>
                    <td><?= $data['status']; ?></td>
                    <td><?= $data['keterangan']; ?></td>
                    <td>
                        <a href="edit_peminjam.php?id_peminjam=<?php echo $data['id_peminjam']; ?>" class="btn btn-warning">Update</a>
                        <a href="hapus_peminjam.php?id_peminjam=<?php echo $data['id_peminjam']; ?>" class="btn btn-danger" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
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