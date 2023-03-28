<?php 

require 'functions.php';
if (isset($_POST['submit'])){
    if(tambahUser($_POST) > 0 ){
        if($query)
            ?>
            <script>
                alert('DATA BERHASIL DITAMBAH');
                window.location='index.php';
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('DATA GAGAL DITAMBAH');
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
    <title>Halaman Tambah User</title>
</head>
<body>
    <div class="box">
        <h2>Tambah Data User</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nama_lengkap">Nama Lengkap</label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap"><br/>

            <label for="username">Username</label><br>
            <input type="text" name="username" id="username"><br/>

            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br/>
            
            <label for="foto">Foto</label><br>
            <input type="file" name="foto" id="foto"><br/>
            
            <input type="hidden" name="roles" value="Customer"><br>
            
            <button type="submit" name="submit">submit</button>
        </form>

    </div>
</body>
</html>