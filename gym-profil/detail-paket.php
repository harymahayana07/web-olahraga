<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="../assets/js/jquery.js"></script>
</head>

<body style="background-color: #18212b;">
    <?php
    require '../conn.php';
    //menampilan data dalam table
    if (isset($_GET['url-id'])) {
        $input_id = $_GET['url-id'];
        $query = "SELECT * FROM tb_paket WHERE id_paket ='$input_id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_object($result);
    }
    ?>
    <div class="container">
        <div class="col py-3" style="justify-self: center;" >
            <div class="card" style="width: 22rem;margin-top: 20px;margin-right: auto;margin-bottom: auto;margin-left: auto;align-items: center;">
                <img src="../assets/img/<?= $data->gambar; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title"><b>Nama Paket :</b> <br> <?= $data->nama_paket; ?></p>
                    <hr>
                    <p style="text-align: justify;" class="card-text"><b>Keterangan :</b> <br> <?= $data->ket_paket; ?></p>
                    <hr>
                    <p class="card-text"><b>ID :</b>  <?= $data->id_paket; ?></p>
                    <p class="card-text"><b>Harga :</b> Rp.<?= $data->harga_paket; ?></p>
                </div>
                <div class="card-body">
                <a type="button" class="btn btn-primary" href="index.php">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>