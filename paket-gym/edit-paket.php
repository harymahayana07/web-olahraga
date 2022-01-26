<?php
require '../_header.php';

if (!isset($_SESSION['login'])) {
  header('location:../web-olahraga/dashboard/index.php');
}

?>
<div class="box">


  <div class="pull-right">
    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
  
  </div>

  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <h3 class="alert alert-info"> Edit Data Paket</h3>
      <?php
      require '../conn.php';
      //menampilan data dalam table
      if (isset($_GET['url-id'])) {
        $input_id = $_GET['url-id'];
        $query = "SELECT * FROM tb_paket WHERE id_paket ='$input_id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_object($result);
      }
      //simpan data yang telah dirubah dalam table
      if (isset($_POST['simpan'])) {
        $input_id = htmlspecialchars($_POST['txtid_paket']);
        $txtnama_paket = htmlspecialchars($_POST['txtnama_paket']);
        $txtket_paket = htmlspecialchars($_POST['txtket_paket']);
        $txtharga_paket = htmlspecialchars($_POST['txtharga_paket']);
        $file_gambar = htmlspecialchars($_POST['file_gambar']);
        //update syntax dalam mysql
        $sql = "UPDATE tb_paket SET 
                id_paket='$input_id', nama_paket='$txtnama_paket', ket_paket='$txtket_paket', gambar='$file_gambar'
                         WHERE id_paket = '$input_id'";
        $result = mysqli_query($koneksi, $sql);
        //perulangan jika dia berhasil maka ke index dan data diperbarui
        if ($result) {
          header('location:../paket-gym/data-paket.php');
          //jika salah data tidak berhasil diperbarui dan menghasilkan error
        } else {
          echo 'Query Error' . mysqli_error($koneksi);
        }
      }
      ?>

      <form action="" method="post">
        <div class="form-group">
          <label for="id_paket">Id Paket</label>
          <input type="text" name="txtid_paket" id="id_paket" class="form-control" value="<?= $data->id_paket; ?>">
        </div>
        <div class="form-group">
          <label for="nama_paket">Nama Paket</label>
          <input type="text" name="txtnama_paket" id="nama_paket" class="form-control" value="<?= $data->nama_paket; ?>">
        </div>

        <div class="form-group">
          <label for="ket_paket">Keterangan Paket</label>
          <textarea name="txtket_paket" id="ket_paket" class="form-control"><?= $data->ket_paket; ?></textarea>
        </div>
        <div class="form-group">
          <label for="harga">Harga Paket</label>
          <input type="text" name="txtharga_paket" id="harga" class="form-control" value="Rp.<?= $data->harga_paket; ?>">
        </div>
        <div class="form-group">
					<label for="gambar">Gambar Paket</label>
					<input type="file" name="file_gambar" id="gambar" class="form-control">
          <label>Gambar File Saat Ini : <?= $data->gambar; ?></label>
				</div>
        <br>
        <div class="form-group pull-right">
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
          <a href="data-paket.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>

        </div>
      </form>
    </div>
  </div>
</div>
<?php
require '../_footer.php'; ?>