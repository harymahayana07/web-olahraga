<?php 
require '../_header.php';
 ?>
<div class="box">
	
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="../member/data-member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
		</div>
	  </h4>
	      <div class="row">
	  	     <div class="col-lg-6 col-lg-offset-3">
                   <!--  -->
                   <h3 class="alert alert-info"> Tambah Data Member</h3>
        <!--  -->
        <?php
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
?>
<!--  -->
<?php
require '../conn.php';
//menambahkan htmlspecialchars
    if(isset($_POST['simpan'])){
        $txtusername = htmlspecialchars($_POST['txtusername']);
        $txtfullname = htmlspecialchars($_POST['txtfullname']);
        $txtpassword = sha1(htmlspecialchars($_POST['txtpassword']));
        $txtalamat = htmlspecialchars($_POST['txtalamat']);
        $no_telp = htmlspecialchars($_POST['no_telp']);
        $role = htmlspecialchars($_POST['role']);
$sql = "INSERT INTO tb_user VALUES (NULL,'$txtusername','$txtfullname','$txtpassword','$txtalamat','$no_telp','$role')";
$query = mysqli_query($koneksi,$sql);

if($query)  {
    header('location:data-member.php');
}else {
    echo 'Query Error'. mysqli_error($koneksi);
}
}
    ?>
<!--  -->

	  		<form action="" method="post">
	  			<div class="form-group">
	  				<label for="username">Username</label>
	  				<input type="text" name="txtusername" id="username" class="form-control" required autofocus>
	  			</div>
	  			<div class="form-group">
	  				<label for="fullname">Fullname</label>
	  				<input type="text" name="txtfullname" id="fullname" class="form-control" required>
	  			</div>
                  <div class="form-group">
	  				<label for="password">Password</label>
	  				<input type="password" name="txtpassword" id="password" class="form-control" required>
	  			</div>
	  			<div class="form-group">
	  				<label for="alamat">Alamat</label>
	  				<textarea name="txtalamat" id="alamat" class="form-control" required></textarea>
	  			</div>
	  			<div class="form-group">
	  				<label for="telp">No. Telepon</label>
	  				<input type="number" name="no_telp" id="telp" class="form-control" required>
	  			</div>
                  <div class="form-group">
	  				<label for="role">Role</label>
                      <select name="role" id="role">
                                 <option value="admin">Admin</option>
                                 <option value="member">Member</option>
                    </select>
	  			</div>

	  			<div class="form-group pull-right">
	  				<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
	  			
	  					</div>
	  				</form>
	  	 	    </div>
	  	 	</div>
		</div>
<?php 
require '../_footer.php';?>