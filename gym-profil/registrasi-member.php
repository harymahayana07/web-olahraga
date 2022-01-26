 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">

 	<link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css//bootstrap.css">

 	<style>
 		body {
 			background-color: #18212b;

 		}

 		.container {
 			color: whitesmoke;
 		}
 	</style>
 </head>

 <body>

 	<script src="../assets/js/jquery.js"></script>
 	<!-- validasi parsley -->
 	<script src="../assets/Parsley.js-2.9.2/dist/parsley.min.js"></script>
 	<!-- memunculkan error/kesalahan parsley dengan bahasa indonesia -->
 	<script src="../assets/Parsley.js-2.9.2/dist/i18n/id.js"></script>
 	<!-- Start Registrasi Member -->
 	<section class="contact" id="contact">
 		<div class="container">
 			<div class="content">

 				<div class="box">
 					<div class="pull-right">
 						<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>

 					</div>
 					</h4>
 					<div class="row">
 						<div class="col-lg-6 col-lg-offset-3">
 							<!--  -->
 							<h3 class="alert alert-info"> Registrasi Member & Paket</h3>
 							<!--  -->

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
										header('location:index.php');
									} else {
										echo 'Query Error' . mysqli_error($koneksi);
									}
								}


								?>
 							<!--  -->

 							<form action="" method="post" data-parsley-validate>
 								<div class="form-group">
 									<label for="username">Username :</label>
 									<input type="text" name="txtusername" id="username" class="form-control" required autofocus data-parsley-length="[6, 12]">
 								</div>

 								<div class="form-group">

 									<label for="namapaket">Paket Dipilih :</label>

 									<select name="txtnama_paket" id="nama_paket" class="form-control" required>
 										<option value="" selected="selected">--Pilih--</option>
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
 									<input type="number" name="no_telp" id="telp" class="form-control" required data-parsley-type="number">
 								</div>
 								<br>
 								<div class="form-group pull-right">
 									<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
 									<a type="button" class="btn btn-primary" href="index.php">Kembali</a>

 								</div>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
 	<!-- End Contact -->


 </body>

 </html>