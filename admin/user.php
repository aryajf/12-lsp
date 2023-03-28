<?php
require 'functions.php';
$user = query("SELECT * FROM user");

?>


<?php require '../layout/sidebar.php'; ?>
<h1>Data User</h1>
<a href="tambah_user.php">Tambah</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>Image</th>
        <th>Roles</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($user as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_lengkap"]; ?></td>
            <td><?= $data["username"]; ?></td>
            <td><img src="../image/<?= $data["foto"]; ?>" alt="" width="100"></td>
            <td><?= $data["roles"]; ?></td>
            <td>
                <a href="edit_user.php?id=<?= $data["id_user"]; ?>">Edit</a>
                <a href="hapus_user.php?id=<?= $data["id_user"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>