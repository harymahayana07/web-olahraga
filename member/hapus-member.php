<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:../gym-profil/index.php');
}
?>
<?php
if (isset($_GET['id_member'])){
require '../conn.php';

$id = $_GET['id_member'];
$query="DELETE FROM tb_member WHERE id_member = '$id'";
$result = mysqli_query($koneksi,$query);

if($result) {
     header('location:data-member.php');
     
} else {
    echo 'Data Gagal Terhapus'.mysqli_error($koneksi);
}
}
?>
