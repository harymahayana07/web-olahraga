<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HARY GYM</title>
  <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <script src="../assets/js/jquery.js"></script>
  <!--  -->
  <style>
    .navbar {
      background-color: #18212b;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1;
    }
  </style>
</head>

<body style="background-color:#18212b ;">
  <div class="container-fluid" style="height: 65px;background-color: #18212b;">

  </div>
  <!-- section nav -->
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <!-- letakkan image hary gym -->
        <a class="navbar-brand" href="#">
          <img src="../assets/img/logo_web-gym.jpg" style="border-radius: 150px; height: 40px; width: 40px;" alt="hary_gym">
          <span><b> WEB HARY GYM </b></span>
        </a>
        <!-- end img -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrasi-member.php">Daftar Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="../login.php" class="btn btn-primary active">Login</a>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <!-- end nav -->
  <!-- section carousel -->
  <section class="container-fluid" style="background-color:#18212b;">
    <div class="row">
      <div class="col-lg-8 py-1" style="margin: auto;">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../assets/img/carousel1.jpg" class="d-block w-100" style="height: 510px; border-radius:20px;" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Build Perfect Body</h5>
                <p>Raih badan impianmu disini dengan penawaran paket impian.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../assets/img/carousel2.jpg" class="d-block w-100" style="height: 510px; border-radius:20px;" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Best Training</h5>
                <p>Tempat dengan pelatihan terbaik yang ada di mataram.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../assets/img/carousel3.jpg" class="d-block w-100" style="height: 510px; border-radius:20px;" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Free Konsultasi</h5>
                <p>Konsultasi apapun akan dilayani oleh mentor-mentor yang ahli dibidangnya.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="col-lg-10 py-2" style="margin: auto;">

        <p style="color: white;text-align: justify;"><b>Hary Gym</b> Adalah sebuah Tempat Kebugaran yang
          banyak sekali diminati baik kalangan remaja maupun dewasa untuk dijadikan sebagai tempat
          melakukan kegiatan latihan kebugaran sseperti senam , atletik ataupun kardio. Pada Hary gym
          atau pusat kebugaran golongan satu ini terdapat fasilitas berupa area fitness serta area senam.
          Tempat ini juga memiliki akses wifi dan memiliki tampilan elegan serta desain interiornya
          memiliki desain khusus sehingga diminati oleh kalangan remaja saat ini di mataram.
        </p>
      </div>

    </div>
  </section>
  <!-- end carousel -->


  <!-- Start Paket -->
  <section style="background-color: whitesmoke;">
    <div class="container">
      <div class="row mb-3 py-2">
        <div class="col-md-12" style="margin: auto;">
          <h2 style="text-align: center; color: black;">Daftar Paket Kami</h2>
          <hr>
          <div class="row">
            <!--  -->
            <?php
            // ambil koneksi
            require '../conn.php';
            // ambil isi/check data dari tb paket
            $query = "SELECT * FROM tb_paket";
            $sql = mysqli_query($koneksi, $query);
            // perulangan untuk memunculkan banyak paket
            while ($data = mysqli_fetch_object($sql)) {
            ?>
              <!-- munculkan perulangan dengan card -->

              <div class="col-md-3" style="margin-bottom: 20px;">


                <div class="card" style="width: 18rem; height: 24rem; border-radius: 10px;">
                  <h5 class="card-header" style="background-color: #18212b; color: whitesmoke;text-align: center;">Rp.<?= $data->harga_paket; ?></h5>
                  <img src="../assets/img/<?= $data->gambar; ?>" class="card-img-top" style="height: 140px;">

                  <div class="card-body">
                    <h5 class="card-title"><?= substr($data->nama_paket, 0, 20) ?>...</h5>
                    <p class="card-text"><?= substr($data->ket_paket, 0, 70) ?>...</p>
                  </div>
                  <div class="card-footer text-muted">
                    <div class="row">
                      <div class="col">
                        <p>ID : <?= $data->id_paket; ?></p>
                      </div>
                      <div class="col">
                        <td></td>
                        <a type="button" class="btn btn-primary" href="detail-paket.php?url-id=<?= $data->id_paket; ?>">Detail</a>
                      </div>
                    </div>


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
  <!-- contact person -->


  <section class="container" style="color: whitesmoke;">
<div class="row">
    <div class="col center">
      <h3 style="text-align: center;">Yuk Gabung Dengan Hary Gym Sekarang !</h3>
     
      <a style="display: flex;justify-content: center;width: 70px;align-items: center;margin: auto;" type="button" class="btn btn-success" href="registrasi-member.php">Join</a>
      <br>
      </div>
      <hr>
      <div class="info col-md-6">
        <ul>
          <li><span class="fa fa-map-marker"></span> Alamat : jl. lalu mesir no.10 cakranegara</li>
          <hr>
          <li><span class="fa fa-phone"></span> No.telp : 0878515123412</li>
          <hr>
          <li><span class="fa fa-envelope"></span> BUILD YOUR FIT BODY NOW IN HARY GYM</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- bundel min js -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>