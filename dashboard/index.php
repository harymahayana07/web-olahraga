<?php
require '../_header.php';
if (!isset($_SESSION['login'])) {
  header('location:login.php');
}
?>
<a href="#menu-toggle" class="btn btn-outline-primary" id="menu-toggle"><i class="fas fa-bars"></i></a>

<div class="card col-xl-6 bg-info" style="margin-top: 20px;">
  <div class="card-body" style="text-align: center;">
  <h5>Welcome <?= $_SESSION['username']; ?> To Website Gym </h5>
  <a href=""></a>
  </div>
</div>

<!-- content tengah -->
<br>



<!--  -->
<div class="row">
  <div class="col-xl-3 col-sm-6 col-12 mb-4">
    <div class="card bg-success" >
      <div class="card-body">
        <div class="d-flex justify-content-between px-md-1">
          <div>
            <h3 class="text-dark">PAKET</h3>
            <a href="../paket-gym/data-paket.php" class="btn btn-sm btn-warning float-left">View</a>
          </div>
          <div class="align-self-center">
         
            <i class="fas fa-archive text-warning fa-3x"></i>
          </div>
        </div>
        <div class="px-md-1">
          <div class="progress mt-3 mb-1 rounded" style="height: 7px">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 col-12 mb-4">
    <div class="card bg-success">
      <div class="card-body">
        <div class="d-flex justify-content-between px-md-1">
          <div>
            <h3 class="text-dark">MEMBER</h3>
            <a href="../member/data-member.php" class="btn btn-sm btn-warning float-left">View</a>
      
           
          </div>
          <div class="align-self-center">
         
            <i class="fas fa-users text-warning fa-3x"></i>
            
          </div>
        </div>
        <div class="px-md-1">
          <div class="progress mt-3 mb-1 rounded" style="height: 7px">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->


<?php require '../_footer.php'; ?>