<?php 
session_start();

if (!isset($_SESSION["username"])) {
    echo "
    <script type='text/javascript'>
    alert ('Silahkan Login Terlebih Dahulu');
    window.location='../login/index.php'
    </script>
    ";
}
if ($_SESSION["roles"] != "Admin"){
    echo "
    <script type='text/javascript'>
    alert ('Mohon Maaf, Anda Bukan Admin');
    window.location='../login/index.php'
    </script>
    ";
}

require 'functions.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if(isset($_POST["submit"])){
    if(updateProduk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data Berhasil Diedit');
            window.location = 'produk.php'
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gagal Diedit');
            window.location = 'produk.php'
        </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Produk</title>
</head>
<body>
    <div class="box">
        <h2>Edit Data Produk</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?= $produk['id_produk']; ?>">
            <label for="nama_produk">Nama Produk</label><br />
            <input type="text" name="nama_produk" id="nama_produk" value="<?= $produk['nama_produk']; ?>"><br /><br />
            
            <label for="stok">Stok</label><br />
            <input type="number" name="stok" id="stok" value="<?= $produk['stok']; ?>"><br /><br />

            <label for="harga">Harga Produk</label><br />
            <input type="number" name="harga" id="harga" value="<?= $produk['harga']; ?>"><br /><br />

            <label for="deskripsi">Deskripsi</label><br />
            <input type="text" name="deskripsi" id="deskripsi" value="<?= $produk['deskripsi']; ?>"><br /><br />

            <label for="foto">Foto : </label><br />
            <input type="file" name="foto" id="foto" value="<?= $produk["foto"]; ?>"><br /><br />

            <button type="submit" name="submit">Edit Data</button>
        </form>
    </div>

</body>
</html> 