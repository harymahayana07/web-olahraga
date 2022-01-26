<?php 
require '../_header.php';

if(!isset($_SESSION['login'])){
    header('location:../web-olahraga/dashboard/index.php');
}

 ?>
<div class="box">
	
	 
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
		
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
                    $txtnama_paket = htmlspecialchars($_POST['txtnama_paket']);
                    $no_telp = htmlspecialchars($_POST['no_telp']);
                 
        //update syntax dalam mysql
                 $sql = "UPDATE tb_member SET 
                         username='$txtusername', nama_paket='$txtnama_paket', no_telp='$no_telp'
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
					
          <label for="namapaket">Paket Dipilih :</label>
          
          <select name="txtnama_paket" id="nama_paket" class="form-control" required value="<?= $data->nama_paket; ?>">
          <?php 
          $sql1 = "SELECT * FROM tb_paket";
          $query1 = mysqli_query($koneksi, $sql1);						
          while ($data2 = mysqli_fetch_object($query1)) { 
          ?>
            <option value="<?= $data2->nama_paket; ?>"><?= $data2->nama_paket; ?></option>
          <?php
        }
          ?>

          </select>
        
      </div>
	  		
	  			<div class="form-group">
	  				<label for="telp">No. Telepon</label>
	  				<input type="text" name="no_telp" id="telp" class="form-control" value="<?= $data->no_telp; ?>">
	  			</div>
          <!-- 21 -->
         <br>
                
	  			<div class="form-group pull-right">
	  				<input type="submit" name="simpan" value="Simpan Perubahan" class="btn btn-success">
            <a href="data-member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
	  			
	  					</div>
	  				</form>
	  	 	    </div>
	  	 	</div>
		</div>
<?php 
require '../_footer.php';?>