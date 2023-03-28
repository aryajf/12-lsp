<?php 

require 'functions.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];
if (isset($_POST['submit'])){
    if(updateUser($_POST) > 0 ){
        if($query)
            ?>
            <script>
                alert('DATA BERHASIL DIEDIT');
                window.location='index.php';
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('DATA GAGAL DIEDIT');
                window.location='index.php';
            </script>
            <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit User</title>
</head>
<body>
    <div class="box">
        <h2>Edit Data User</h2>
        <form action="" method="POST">
            <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
            <label for="nama_lengkap">Nama Lengkap</label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $user['nama_lengkap']; ?>"><br><br>

            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" value="<?= $user['username']; ?>"><br> <br>

            <label for="password">password</label><br>
            <input type="password" name="password" id="password" value="<?= $user['password']; ?>"><br>
            
            <input type="hidden" name="roles" value="<?= $user['roles']; ?>"><br><br>
            <button type="submit" name="submit">Tambah Data</button>
        </form>
    </div>
</body>
</html>