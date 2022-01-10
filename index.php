<?php
require 'conn.php';
if(isset($_SESSION['user'])) {
   header('location:../dashboard/index.php');
   
}else {
    header('login.php');
}
?>

 