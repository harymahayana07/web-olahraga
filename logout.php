<?php
session_start();
// destroy untuk mengakhiri session start
session_destroy();
// arahkan kembali ke halaman profil web gym
header('location:../web-olahraga/gym-profil/index.php');
?>