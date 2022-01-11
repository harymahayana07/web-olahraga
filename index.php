<?php
require 'conn.php';
if(isset($_SESSION['user'])) {
   header('location:../web-olahraga/dashboard/index.php');
   
}else {
    header('location:../web-olahraga/gym-profil/index.php');
}
?>

 