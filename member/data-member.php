<!-- index web_dasar by Arikk -->
<?php
require '../_header.php';

if (!isset($_SESSION['login'])) {
    header('location:../gym-profil/index.php');
}
?>
<a href="#menu-toggle" class="btn btn-outline-primary" id="menu-toggle"><i class="fas fa-bars"></i></a>
<a href="./tambah-member.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Member </a>



<br><br>
<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama_paket</th>
            <th>No_telp</th>
                <th>Aksi</th>
          
        </tr>
    <tbody>
        <?php
        require '../conn.php';
        $query = "SELECT * FROM tb_member";
        $sql = mysqli_query($koneksi, $query);
        $no = 1;
        while ($data = mysqli_fetch_object($sql)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data->username; ?></td>
                <td><?= $data->nama_paket; ?></td>
                <td><?= $data->no_telp; ?></td>
                <td><a href="edit-member.php?url-id=<?= $data->id_member; ?>">
                            <input type="submit" value="Edit" class="btn btn-warning">
                        </a>
                <?php
                if ($_SESSION['role'] == 'admin') {
                ?>
                   <a href="hapus-member.php?id_member=<?= $data->id_member; ?>">
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