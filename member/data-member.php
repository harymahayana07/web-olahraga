<!-- index web_dasar by Arikk -->
<?php
require '../_header.php';

if(!isset($_SESSION['login'])){
header('location:../gym-profil/index.php');
}
?>
    <h3 class="alert alert-info"> Welcome <b><?= $_SESSION['Username'];?></b> To Data Member Gym
       
    </h3>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Togglemenu</a>
    <?php
       if($_SESSION['role']=='admin'){
       ?>
    <a href="./tambah-member.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
    <?php 
       }
    ?>
    <br><br>
<table class="table table-bordered" >
<thead>
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Alamat</th>
        <th>No_telp</th>
        <?php
       if($_SESSION['role']=='admin'){
       ?>
        <th>Aksi</th>  
        <?php
       }
        ?>
    </tr>
    <tbody>
        <?php
        require '../conn.php';
        $query = "SELECT * FROM tb_member";
        $sql = mysqli_query($koneksi,$query);
        $no = 1;
        while ($data = mysqli_fetch_object($sql)) {
        ?>
        <tr>
        <td><?= $no++; ?></td>
        <td><?= $data->username; ?></td>
        <td><?= $data->paket_dipilih; ?></td>

        <td><?= $data->no_telp; ?></td>
        <?php
       if($_SESSION['role']=='admin'){
       ?>
       <td><a href="edit-member.php?url-id=<?=$data->id_member;?>">
       <input type="submit" value="Edit" class="btn btn-warning" >
    </a> <a href="hapus-member.php?id_user=<?= $data->id_member;?>">
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