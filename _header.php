<?php
require '../conn.php';
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HARY GYM</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css//bootstrap.css">

    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.css"> -->
    <link rel="stylesheet" href="../assets/css/simple-sidebar.css">
</head>

<body>
    <script src="../assets/js/jquery.js"></script>
   
    <script src="../assets/js/bootstrap.min.js"></script>


    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="">
                        <img src="../assets/img/logo_web-gym.jpg" style="height: 40px; width:40px;border-radius: 50px;" alt="hary_gym" class="brand-image " >
                        <span><b> WEB HARY GYM </b></span>
                    </a>
                </li>
                <li>

                    <button type="button" class="btn btn-success">
                        <img src="../assets/img/avatar.png" style="height: 20px; width:20px; border-radius: 20px;" alt="hary_gym" class="brand-image" style="opacity: .8">

                        <?= $_SESSION['role']; ?> : <?= $_SESSION['username']; ?>

                    </button>


                </li>

                <li>
                    <a href="../dashboard/index.php">Dashboard</a>
                </li>
                <li>
                    <a href="../paket-gym/data-paket.php">Paket gym</a>
                </li>
                <li>
                    <a href="../member/data-member.php">Data Member</a>
                </li>

                <li>
                    <a href="../logout.php" onclick="return confirm('yakin ingin logout?')"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">