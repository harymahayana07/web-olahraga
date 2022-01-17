<!DOCTYPE html>
<html>
<head>
	<title>HARY GYM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../gym-profil/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../gym-profil/css/style.css">

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }
  </style>
  
</head>
<body>
 <!-- Start Header  -->
 <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">HARY <span>GYM</span></a>
 	 	</div>
		  <a href="../login.php" class="btn btn-primary">Login</a>
 	 		<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="#home">Home</a></li>
 	 			<li><a href="#about">About</a></li>
 	 			<li><a href="#price">Price</a></li>
 	 			<li><a href="#contact">Contact</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>
 <!-- End Header  -->

  <!-- Start Home -->
  <section class="home wow flash" id="home">
  	 <div class="container">
  	 	  <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time. Let's go</h1>
  	 	  <h1 class="wow slideInRight" data-wow-delay="1s">We are ready to <span>fit you</span></h1>
  	 </div>
  	 
  </section>
  <!-- End Home -->

  

 <!-- Start About -->
  <section class="about" id="about">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box wow bounceInUp">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about1.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Free Consultation</h4>
                       	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box wow bounceInUp" data-wow-delay="0.2s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about2.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Best Training</h4>
                       	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about3.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Build Perfect Body</h4>
                       	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  </div>
  	  </div>
  </section>
 <!-- End About -->

<!-- Start Today -->
 <section class="start-today">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="box text wow slideInLeft">
				<h2>Mulai Pelatihan Kamu Hari Ini </h2>
 		 	  	 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
 		 	  	 <a href="#contact" class="btn">Mulai Sekarang</a>
 		 	  </div>
 		 	  <div class="box img wow slideInRight">
 		 	  	 <img src="images/gallery4.jpg" alt="start today" />
 		 	  </div>

 		 </div>
 	</div>
 </section>
<!-- End Start Today -->


 <!-- Start Paket -->
  <section class="price-package" id="price">
  	 <div class="container">
  	 	  <h2>Pilih Paketmu Sekarang !</h2>
  	 	  <div class="content">
			 <!-- bikin div kelas row lebih dari 4 bikin row baru -->
			 <!-- <div class="box">
				 <div class="row mb-3"> -->
				
				 <div class="row">
  
				</div>
				
		<?php
					// ambil koneksi
				require '../conn.php';
					// ambil isi/check data dari tb paket
				$query = "SELECT * FROM tb_paket";
				$sql = mysqli_query($koneksi,$query);
					// perulangan untuk memunculkan banyak paket
				while ($data = mysqli_fetch_object($sql)) {
				?>
				<!-- munculkan perulangan dengan card -->
				<div class="col-6 col-md-4">
				<p><?=$data->harga_paket;?></p>
				<div class="card" style="width: 20rem; border-radius: 10px;">
						<img src="../assets/img/<?=$data->gambar;?>" class="card-img-top" style="height: 13rem;">
				
				<div class="card-body">
						<h5 class="card-title"><?=$data->nama_paket;?></h5>
						<p class="card-text"><?=$data->ket_paket;?></p>
				</div>
				<div class="card-footer text-muted">
						<p><?=$data->id_paket;?></p>
				</div>
				</div>
			</div>
		<?php
		}
		?>
<!--  -->
</div>
</div>
</div>

</div>
</section> 
	
			 <!-- munculkan box , berisi price dari harga_paket ,id dan nama paket , keterangan paket -->
				 <!-- kelas box -->
  	 	  	  <!-- <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  Rp.50.000/Bulan
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/price1.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Body Building Training</h3>
  	 	  	  	  	   	  <p>Get Free WiFi</p>
  	 	  	  	  	   	  <p>Month to Month</p>
  	 	  	  	  	   	  <p>No Time Restrictions</p>
  	 	  	  	  	   	  <p>Gym and Cardio</p>
  	 	  	  	  	   	  <p>Service Locker Rooms</p>
  	 	  	  	  	   	  <a href="#contact" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div> -->
				   <!-- end box  -->
  	 	  	  <!-- <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  Rp.75.000/bulan
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/price2.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Arm Building Training</h3>
  	 	  	  	  	   	  <p>Get Free WiFi</p>
  	 	  	  	  	   	  <p>Month to Month</p>
  	 	  	  	  	   	  <p>No Time Restrictions</p>
  	 	  	  	  	   	  <p>Gym and Cardio</p>
  	 	  	  	  	   	  <p>Service Locker Rooms</p>
  	 	  	  	  	   	  <a href="#contact" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  Rp.150.000/Bulan
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="images/price3.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>All Body Building Training</h3>
  	 	  	  	  	   	  <p>Get Free WiFi</p>
  	 	  	  	  	   	  <p>Month to Month</p>
  	 	  	  	  	   	  <p>No Time Restrictions</p>
  	 	  	  	  	   	  <p>Gym and Cardio</p>
  	 	  	  	  	   	  <p>Service Locker Rooms</p>
  	 	  	  	  	   	  <a href="#contact" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  </div>
  	 </div>
 
 <-- End Price -->

 <!-- Start Registrasi Member -->
  <section class="contact" id="contact">
     <div class="container">
        <div class="content">
			
            <div class="box form wow slideInLeft">
				<?php
					// ambil koneksi
						require '../conn.php';

					//menambahkan htmlspecialchars

  				  if(isset($_POST['submit'])){
    				    $txtusername = htmlspecialchars($_POST['txtusername']);
    				    $txtfullname = htmlspecialchars($_POST['txtfullname']);
						$txtpassword = sha1(htmlspecialchars($_POST['txtpassword']));
						$txtalamat = htmlspecialchars($_POST['txtalamat']);
						$no_telp = htmlspecialchars($_POST['no_telp']);
						$role = htmlspecialchars($_POST['role']='member');
					// masukan ke database
					$sql = "INSERT INTO tb_user VALUES 
					(NULL,'$txtusername','$txtfullname','$txtpassword','$txtalamat','$no_telp','$role')";

					$query = mysqli_query($koneksi,$sql);
					//jika berhasil arahkan ke gym-profil-index		
					if($query)  {
  					  header('location:../gym-profil/index.php');
					}else {
 					   echo 'Query Error'. mysqli_error($koneksi);
					}
					}
 			   ?>
               <form action="" method="post">
                  <input type="text" name="txtusername" placeholder="Enter username" autocomplete>
                  <input type="text" name="txtfullname" placeholder="Enter fullname" autocomplete>
                  <input type="password" name="txtpassword" placeholder="Enter password">
				  <input type="text" name="txtalamat" placeholder="Enter Alamat" autocomplete>
                  <input type="text" name="no_telp" placeholder="Enter No Hp" autocomplete>
                  <input type="text" name="role" placeholder="Enter role" hidden>
                 
                  <button type="submit" name="submit" >Submit</button>
               </form>
            </div>
            <div class="box text wow slideInRight">
                 <h2>Yuk Gabung Dengan Hary Gym Sekarang !</h2>
                  <p class="title-p"> Isi biodata di samping untuk melakukan Registrasi Member</p>
                  <div class="info">
                      <ul>
                          <li><span class="fa fa-map-marker"></span> Alamat : jl. lalu mesir no.10 cakranegara</li>
                          <li><span class="fa fa-phone"></span> No.telp : 0878515123412</li>
                          <li><span class="fa fa-envelope"></span> BUILD YOUR FIT BODY NOW IN HARY GYM</li>
                      </ul>
                  </div>
            </div>
        </div>
     </div>
  </section>
 <!-- End Contact -->

 <!-- jquery -->

 <script src="../gym-profil/js/jquery.min.js"></script>
 <!-- function js untuk membuat tampilan interaktif -->
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script src="../gym-profil/js/wow.min.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
</script>
</body>
</html>






