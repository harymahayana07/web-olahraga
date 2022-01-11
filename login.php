<?php
// session mulai
session_start();
//include/require koneksi
require 'conn.php';
// jika teken tombol login
if(isset($_POST['login'])){
// simpan inputan yg terjadi pada variabel post dan massukan ke variable $username dan $password
$username = $_POST['txtusername'];
$password = sha1($_POST['txtpassword']);
// jalankan query dari sql, koneksi dari conn, lalu ambil semua isi dalam tb_user, jika inputan sesuai user dan pass
$query = mysqli_query($koneksi ,"SELECT * FROM tb_user WHERE username='$username' and password='$password'");
// kondisi, jika query benar, 
if(mysqli_num_rows($query)===1){
    // masukan ke variabel data
    $data = mysqli_fetch_object($query);
    // ambil nilai dan masukan ke dalam session
    $_SESSION['login']=true;
    $_SESSION['username']=$data->username;
    $_SESSION['fullname']=$data->fullname;
    $_SESSION['role']=$data->role;
    // arahkan ke dashboard-> index
    header('location:dashboard/index.php');
    // jika salah maka munculkan pop up login gagal, username/password salah
} else {
?>
<div class ="row">
<div class ="col-lg-6 col-lg-offset-3"> 
    <div class="alert alert-danger alert-dismissable" role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <strong>Login gagal!</strong> Username / Password salah 
    </div>
</div>
</div>
<?php
// end else
}
// endphp
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="../web-olahraga/assets/fontawesome-free/css/fontawesome.min.css">
<link rel="stylesheet" href="../web-olahraga/assets/css/bootstrap.min.css">
<!-- internal css -->
<style>
body {
    background-color: blueviolet;
}
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Login</h2>       
        <div class="form-group">
            <input type="text" name="txtusername" class="form-control" placeholder="Username" required="required" autocomplete>
        </div>
        <div class="form-group">
            <input type="password" name="txtpassword" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
        </div>
    </form>
</div>
<script src="../web-olahraga/assets/js/jquery.js"></script>
<script src="../web-olahraga/assets/js/bootstrap.min.js"></script>
</body>
</html>