<!-- koneksi web_dasar by Arikk -->
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'web_olahraga';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die('koneksi gagal' . mysqli_connect_error());
}
?>