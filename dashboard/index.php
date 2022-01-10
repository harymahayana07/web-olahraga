<?php
require '../_header.php';
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
?>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Togglemenu</a>
                        <a href="" class="alert alert-info">Welcome <?= $_SESSION['fullname'];?> To GYM MEMBER </a>
                    </div>
                 </div>
<!-- content tengah -->
<br><br>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3 mt-5">
            <div class="alert alert-info">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Data Transaksi Gym</span>
                  <a href="menuju-view-data-transaksi-gym" class="btn btn-sm btn-info float-left">View</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="alert alert-success mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Profil Gym</span>
                <a href="menuju-profil-gym" class="btn btn-sm btn-danger float-left">View</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
<!-- end content tengah  -->

                    </div>
                </div>
<?php require '../_footer.php';?>
