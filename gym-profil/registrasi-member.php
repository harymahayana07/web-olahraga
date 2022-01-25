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

   <script src="../assets/js/bootstrap.min.js"></script>


   <!-- Start Registrasi Member -->
   <section class="contact" id="contact">
     <div class="container">
       <div class="content">

         <div class="box col-md-5">
           <?php
            // ambil koneksi
            require '../conn.php';

            //tampilkan sql dari inner join
            // $sql = "SELECT id_paket,nama_paket,harga_paket from tb_paket INNER JOIN tb_member ON id_paket = id_member";

            if (isset($_POST['simpan'])) {
              $id;
              $txtusername = htmlspecialchars($_POST['txtusername']);
              $txtpassword = htmlspecialchars($_POST['txtpassword']);
              $txtnama_paket = htmlspecialchars($_POST['txtnama_paket']);
              $no_telp = htmlspecialchars($_POST['no_telp']);
             

              // masukan ke database
              $sql = "INSERT INTO tb_member VALUES 
					(NULL,'$txtusername','$txtpassword','$txtnama_paket','$no_telp')";

              $query = mysqli_query($koneksi, $sql);
              //jika berhasil arahkan ke gym-profil-index		
              if ($query) {
                header('location:../gym-profil/index.php');
              } else {
                echo 'Query Error' . mysqli_error($koneksi);
              }
            }
            ?>
           <div class="card col-lg-12 bg-info" style="margin-top: 20px;">
             <div class="card-body">
               <h5>Form Registrasi New Member Web Hary Gym</h5>

             </div>
           </div>
           <form action="" method="post">
             <div class="form-group">
               <label for="username">Username :</label>
               <input type="text" name="txtusername" id="username" class="form-control" required autofocus>
             </div>
             <div class="form-group">
               <label for="password">Password :</label>
               <input type="password" name="txtpassword" id="password" class="form-control" required>
             </div>
             <div class="form-group">
               <label for="namapaket">Paket Dipilih :</label>
               <textarea name="txtnama_paket" id="txtnama_paket" class="form-control" required></textarea>
             </div>
             <div class="form-group">
               <label for="telp">No. Telepon :</label>
               <input type="number" name="no_telp" id="telp" class="form-control" required>
             </div>
             <br>
             <div class="form-group">
               <label for="harga">Harga Paket : </label>
               <select name="txtharga_paket" id="harga">
                 <option value="">--Pilih--</option>
                 <option value="125000">coba1</option>

               </select>
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
   </section>
   <!-- End Contact -->


 </body>

 </html>