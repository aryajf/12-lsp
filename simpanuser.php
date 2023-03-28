<?php
require 'functions.php';

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$foto = $_FILES['foto'];
$roles = $_POST['roles'];

$query = mysqli_query($conn, "INSERT INTO user VALUES ('NULL','$nama_lengkap','$username','$password','$foto','$roles')");

if($query){
    ?>
    <script>
        alert('Data Berhasil Di Tambah');
        window.location='index.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal Di Tambah');
        window.location='index.php';
    </script>
    <?php
}

?>
