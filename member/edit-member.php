<?php 
require '../_header.php';

if(!isset($_SESSION['login'])){
    header('location:../web-olahraga/dashboard/index.php');
}

 ?>
<div class="box">
	
	 
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="data-member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
		</div>
	 
	      <div class="row">
	  	     <div class="col-lg-6 col-lg-offset-3">
               <h3 class="alert alert-info"> Edit Data Member</h3>
               <?php
    require '../conn.php';
        //menampilan data dalam table
        if(isset($_GET['url-id'])){
            $input_id = $_GET['url-id'];
            $query = "SELECT * FROM tb_member WHERE id_member ='$input_id'";
            $result = mysqli_query($koneksi,$query);
            $data = mysqli_fetch_object($result);

        }
        //simpan data yang telah dirubah dalam table
       if(isset($_POST['simpan'])){
                    $input_id = $_POST['txtid'];
                    $txtusername = htmlspecialchars($_POST['txtusername']);
                    $txtpassword = htmlspecialchars($_POST['txtpassword']);
                    $no_telp = htmlspecialchars($_POST['no_telp']);
                 
        //update syntax dalam mysql
                 $sql = "UPDATE tb_member SET 
                         username='$txtusername', Password='$txtpassword', paket_dipilih='$txtpaket', no_telp='$no_telp'
                         WHERE id_member = '$input_id'";
                 $result = mysqli_query($koneksi,$sql);
        //perulangan jika dia berhasil maka ke index dan data diperbarui
                if($result)  {
                  header('location:../member/data-member.php');
      //jika salah data tidak berhasil diperbarui dan menghasilkan error
                }else {
                  echo 'Query Error'. mysqli_error($koneksi);
                }
                }
              ?>
	  		<form action="" method="post">
	  				<input type="hidden" name="txtid" id="username" class="form-control" value="<?=$data->id_member;?>" >
	  		    <div class="form-group">
	  				<label for="username">Username</label>
	  				<input type="text" name="txtusername" id="username" class="form-control" value="<?=$data->username;?>">
	  			</div>
	  			<div class="form-group">
	  				<label for="paket">Paket Yang Dipilih : </label>
	  				<input type="text" name="txtpaket_dipilih" id="paket" class="form-control" value="<?=$data->paket_dipilih;?>">
	  			</div>
	  		
	  			<div class="form-group">
	  				<label for="telp">No. Telepon</label>
	  				<input type="text" name="no_telp" id="telp" class="form-control" value="<?=$data->no_telp;?>">
	  			</div>
          <!-- 21 -->
                  <div class="form-group">
	  				<label for="role">Role : </label>

                      <select name="role" id="cars" class="form-control">
                     <option value="<?=$data->role;?>"><?=$data->role;?></option>
                    </select>
                     
                     
	  			</div>
	  			<div class="form-group pull-right">
	  				<input type="submit" name="simpan" value="Simpan Perubahan" class="btn btn-success">
	  			
	  					</div>
	  				</form>
	  	 	    </div>
	  	 	</div>
		</div>
<?php 
require '../_footer.php';?>