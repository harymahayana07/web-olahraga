<?php
// session mulai
session_start();
//include/require koneksi
require 'conn.php';
// jika teken tombol login
if (isset($_POST['login'])) {
    // simpan inputan yg terjadi pada variabel post dan massukan ke variable $username dan $password
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
    // jalankan query dari sql, koneksi dari conn, lalu ambil semua isi dalam tb_user, jika inputan sesuai user dan pass
    $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' and password='$password'");
    // kondisi, jika query benar, 
    if (mysqli_num_rows($query) === 1) {
        // masukan ke variabel data
        $data = mysqli_fetch_object($query);
        // ambil nilai dan masukan ke dalam session
        $_SESSION['login'] = true;
        $_SESSION['fullname'] = $data->fullname;
        $_SESSION['username'] = $data->username;
        $_SESSION['role'] = $data->role;
        // arahkan ke dashboard-> index
        header('location:dashboard/index.php');
        // jika salah maka munculkan pop up login gagal, username/password salah
    } else {
?>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="alert alert-info alert-dismissable" role="alert">
                    <a href="login.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
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
    <title>Login Hary Gym</title>
    <link rel="stylesheet" href="../assets/fontawesome-free/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- internal css -->
    <style>
        body {
            background-image: url("assets/img/home.jpg");
        }

        .login-form {
            margin-top: 120px;
            width: 340px;
            margin-left: auto;
            margin-bottom: auto;
            margin-right: auto;
            font-size: 15px;
            align-items: center;

        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
            border-radius: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control {
            min-height: 38px;
            border-radius: 5px;
            width: 250px;
            background-color: #95d2e8;

        }

        .btn {
            font-size: 15px;
            font-weight: bold;
            min-height: 38px;
            border-radius: 12px;
            background-color: #193fd4;
        }
    </style>
</head>

<body>
    <div class="login-form ">
        <form action="" method="post">
            <h2 style="text-align: center;">LOGIN</h2>
            <div class="form-group py-2">
                <input type="text" name="txtusername" class="form-control" placeholder="Enter Username " required="required" autocomplete>
            </div>
            <br>
            <div class="form-group py-2">
                <input type="password" name="txtpassword" class="form-control" placeholder="Enter Password" required="required">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
            </div>
        </form>
    </div>
    <script src="../web-olahraga/assets/js/jquery.js"></script>
    <script src="../web-olahraga/assets/js/bootstrap.min.js"></script>
</body>

</html>