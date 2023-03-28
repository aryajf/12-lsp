<?php
require 'functions.php';
$produk = query("SELECT * FROM produk");
?>

<?php require '../layout/sidebar.php';?>
    <h1>Data Produk</h1>
    <a href="tambah_produk.php">Tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Image</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($produk as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_produk"]; ?></td>
            <td><img src="../image/<?= $data["foto"]; ?>" alt="" width="100"></td>
            <td><?= $data["stok"]; ?></td>
            <td>
                <a href="edit_produk.php?id=<?= $data["id_produk"]; ?>">Edit</a>
                <a href="hapus_produk.php?id=<?= $data["id_produk"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>    
