<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:../gym-profil/index.php');
}
?>
<?php
if (isset($_GET['id_user'])){
require '../conn.php';

$id = $_GET['id_user'];
$query="DELETE FROM tb_user WHERE id_user = '$id'";
$result = mysqli_query($koneksi,$query);

if($result) {
     header('location:data-member.php');
     
} else {
    echo 'Data Gagal Terhapus'.mysqli_error($koneksi);
}
}
?>
