<!-- index web_dasar by Arikk -->

<?php
require '../_header.php';

if (!isset($_SESSION['login'])) {
    header('location:../gym-profil/index.php');
}
?>
<a href="#menu-toggle" class="btn btn-outline-primary" id="menu-toggle"><i class="fas fa-bars"></i></a>

<a href="./tambah-paket.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Paket</a>


<br><br>
<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th>No</th>
            <th>Id_Paket</th>
            <th>Nama Paket</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    <tbody>
        <?php
        require '../conn.php';
        $query = "SELECT * FROM tb_paket";
        $sql = mysqli_query($koneksi, $query);
        $no = 1;
        while ($data = mysqli_fetch_object($sql)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data->id_paket; ?></td>
                <td><?= $data->nama_paket; ?></td>
                <td><?= $data->ket_paket; ?></td>
                <td>Rp.<?= $data->harga_paket; ?></td>
                <td><?= $data->gambar; ?></td>
                <td><a href="edit-paket.php?url-id=<?= $data->id_paket; ?>">
                        <input type="submit" value="Edit" class="btn btn-warning"> </a>
                    <?php
                    if ($_SESSION['role'] == 'admin') {
                    ?>
                        <a href="hapus-paket.php?id_paket=<?= $data->id_paket; ?>">
                            <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
                        <?php
                    }
                        ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    </thead>
</table>
</div>
</body>

</html>
<?php
require '../_footer.php';
?>