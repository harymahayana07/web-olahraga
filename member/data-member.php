<!-- index web_dasar by Arikk -->
<?php
require '../_header.php';

if(!isset($_SESSION['login'])){
header('location:../gym-profil/index.php');
}
?>
    <h3 class="alert alert-info"> Welcome <b><?= $_SESSION['fullname'];?></b> To Data Member Gym
       
    </h3>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Togglemenu</a>
    <?php
       if($_SESSION['role']=='admin'){
       ?>
    <a href="./tambah-member.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
    <?php 
       }
    ?>
    <!-- menambahkan search -->
<!-- <div class="row">
    <div class="col-md">
         <a href="tambah.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
         <form action="" method="POST">
         <input type="text" name="txtsearch" class="form-control" placeholder="Search Data Mahasiswa" autofocus autocomplete="off">
         <button class="btn btn-outline-secondary" name="btnsearch" type="button" ><i class="fas fa-search"></i></button>
         </form>
    </div>
    </div>  -->
    <!-- <input type="text" name="txtSearch" class="form-control" placeholder="Search Data Mahasiswa">
    <input type="submit" name="btnCari" class="form-control"> -->
<!-- <div class="input-group sm-3">
    <div class="row">
        <div class="col ">
        <a href="tambah.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
        </div>
<div class="col-lg-4">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
  </div> 
</div>
</div> -->
    <br><br>
<table class="table table-dark table-bordered border-primary" >
<thead>
    <tr>
        <th>No</th>
        <th>Fullname</th>
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
        $query = "SELECT * FROM tb_user";
        $sql = mysqli_query($koneksi,$query);
        $no = 1;
        while ($data = mysqli_fetch_object($sql)) {
        ?>
        <tr>
        <td><?= $no++; ?></td>
        <td><?= $data->fullname; ?></td>
        <td><?= $data->alamat; ?></td>

        <td><?= $data->no_telp; ?></td>
        <?php
       if($_SESSION['role']=='admin'){
       ?>
       <td><a href="edit-member.php?url-id=<?=$data->id_user;?>">
       <input type="submit" value="Edit" class="btn btn-warning" >
    </a> <a href="hapus-member.php?id_user=<?= $data->id_user;?>">
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