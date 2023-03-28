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
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];

if(isset($_POST["submit"])){
    if(updateUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data Berhasil Diedit');
            window.location = 'index.php'
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gagal Diedit');
            window.location = 'index.php'
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
    <title>Halaman Edit User</title>
</head>
<body>
    <div class="box">
        <h2>Edit Data User</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
            <label for="nama_lengkap">Nama Lengkap</label><br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $user['nama_lengkap']; ?>"><br /><br />
            
            <label for="username">Username</label><br />
            <input type="text" name="username" id="username" value="<?= $user['username']; ?>"><br /><br />
            
            <label for="password">Password</label><br />
            <input type="password" name="password" id="password" value="<?= $user['password']; ?>"><br /><br />

            <label for="foto">Foto : </label><br />
            <input type="file" name="foto" id="foto" value="<?= $user["foto"]; ?>"><br /><br />
            
            <input type="hidden" name="roles" value="Customer">

            <button type="submit" name="submit">Edit Data</button>
        </form>
    </div>

</body>
</html> 