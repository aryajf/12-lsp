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
if ($_SESSION["roles"] != "Admin") {
    echo "
    <script type='text/javascript'>
    alert ('Mohon Maaf, Anda Bukan Admin');
    window.location='../login/index.php'
    </script>
    ";
}
require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambahProduk($_POST) > 0) {
        echo "
        <script type='text/javascript'>
            alert('Data Gagal Ditambah');
            window.location = 'produk.php'
            </script>
            ";
        } else {
            echo "
            <script type='text/javascript'>
            alert('Data Berhasil Ditambah');
            window.location = 'produk.php'
        </script>
        ";
    }
}

?>


<?php require '../layout/sidebar.php'; ?>
<div class="box">
    <h2>Tambah Data Produk</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama_produk">Nama Produk</label><br />
        <input type="text" name="nama_produk" id="nama_produk"><br /><br />

        <label for="stok">Stok</label><br />
        <input type="number" name="stok" id="stok"><br /><br />

        <label for="harga">Harga</label><br />
        <input type="number" name="harga" id="harga"><br /><br />

        <label for="deskripsi">Deskripsi Barang</label><br />
        <input type="text" name="deskripsi" id="deskripsi"><br /><br />

        <label for="foto">Foto : </label><br />
        <input type="file" name="foto" id="foto"><br /><br />

        <button type="submit" name="submit">Tambah Data</button>
    </form>
</div>