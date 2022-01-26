<?php
require '../_header.php';
?>
<div class="box">
	<div class="pull-right">
		<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
		
	</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<!--  -->
			<h3 class="alert alert-info"> Tambah Member</h3>
			<!--  -->
			<?php
			if (!isset($_SESSION['login'])) {
				header('location:login.php');
			}
			?>
			<!--  -->
			<?php
			require '../conn.php';
			//menambahkan htmlspecialchars
			if (isset($_POST['simpan'])) {
				$txtusername = htmlspecialchars($_POST['txtusername']);
				$txtnama_paket = htmlspecialchars($_POST['txtnama_paket']);
				$no_telp = htmlspecialchars($_POST['no_telp']);

				$sql2 = "INSERT INTO tb_member VALUES (NULL,'$txtusername','$txtnama_paket','$no_telp')";
				$query2 = mysqli_query($koneksi, $sql2);


				if ($query2) {
					header('location:data-member.php');
				} else {
					echo 'Query Error' . mysqli_error($koneksi);
				}
			}


			?>
			<!--  -->

			<form action="" method="post">
				<div class="form-group">
					<label for="username">Username :</label>
					<input type="text" name="txtusername" id="username" class="form-control" required autofocus>
				</div>
				
				<div class="form-group">
					
						<label for="namapaket">Paket Dipilih :</label>
						
						<select name="txtnama_paket" id="nama_paket" class="form-control" required>
						<option value="">--Pilih--</option>
						<?php 
						$sql1 = "SELECT * FROM tb_paket";
						$query1 = mysqli_query($koneksi, $sql1);						
						while ($data = mysqli_fetch_object($query1)) { 
						?>
							<option value="<?= $data->nama_paket ?>"><?= $data->nama_paket ?></option>
						<?php
					}
						?>

						</select>
					
				</div>
				<div class="form-group">
					<label for="telp">No. Telepon :</label>
					<input type="number" name="no_telp" id="telp" class="form-control" required>
				</div>
				<br>
				<div class="form-group pull-right">
					<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
					<a type="button" class="btn btn-primary" href="data-member.php">Kembali</a>

				</div>
			</form>
		</div>
	</div>
</div>
<?php
require '../_footer.php'; ?>