<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:../gym-profil/index.php');
}
?>
<?php
if (isset($_GET['id_paket'])) {
    require '../conn.php';

    $id = $_GET['id_paket'];
    $query = "DELETE FROM tb_paket WHERE id_paket = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('location:data-paket.php');
    } else {
        echo 'Data Gagal Terhapus' . mysqli_error($koneksi);
    }
}
?>