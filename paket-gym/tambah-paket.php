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
			<h3 class="alert alert-info"> Tambah Data Paket Gym</h3>
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
				$txtid_paket = htmlspecialchars($_POST['txtid_paket']);
				$txtnama_paket = htmlspecialchars($_POST['txtnama_paket']);
				$txtket_paket = htmlspecialchars($_POST['txtket_paket']);
				$txtharga_paket = htmlspecialchars($_POST['txtharga_paket']);
				$file_gambar = htmlspecialchars($_POST['file_gambar']);


				$sql = "INSERT INTO tb_paket VALUES ('$txtid_paket','$txtnama_paket','$txtket_paket','$txtharga_paket','$file_gambar')";
				$query = mysqli_query($koneksi, $sql);

				if ($query) {
					header('location:data-paket.php');
				} else {
					echo 'Query Error' . mysqli_error($koneksi);
				}
			}
			?>
			<!--  -->

			<form action="" method="post">
				<div class="form-group">
					<label for="id_paket">Id Paket</label>
					<input type="text" name="txtid_paket" id="id_paket" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="nama_paket">Nama Paket</label>
					<input type="text" name="txtnama_paket" id="nama_paket" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="ket_paket">Keterangan Paket</label>
					<textarea name="txtket_paket" id="ket_paket" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="harga">Harga Paket</label>
					<input type="text" name="txtharga_paket" id="harga" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="gambar">Gambar Paket</label>
					<input type="file" name="file_gambar" id="gambar" class="form-control">
				</div>
				<br>
				<div class="form-group pull-right">
					<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
					<a href="../paket-gym/data-paket.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>

				</div>

			</form>
		</div>
	</div>
</div>
<?php
require '../_footer.php'; ?>