<?php

// Panggil Koneksi
$conn = mysqli_connect('localhost', 'root', '', 'printer');

// Deklarasiin data-data yang dipakai buat Login
$username = $_POST ["username"];
$password = $_POST ["password"];

// Bikin Querynya
$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

// Kita cek dulu, Jumlah baris didalam Tabelnya
$cek = mysqli_num_rows($query);

// kita cek, kalau data lebih dari > 0
if($cek > 0){

// Menangkap data pakai mysqli_fetch_array
$data = mysqli_fetch_array($query);

// Cek Lagi, datanya Admin / Customer
if($data["roles"] == "Admin"){
    session_start();
    $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
    $_SESSION["username"] = $data["username"];
    $_SESSION["roles"] = $data["roles"];
    header('Location: ../admin/index.php');
}else if ($data["roles"] == "Customer"){
    session_start();
    $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
    $_SESSION["username"] = $data["username"];
    $_SESSION["roles"] = $data["roles"];
    header('Location: ../index.php');
}else{
    echo "
    <script type='text/javascript'>
    alert ('Username atau Password tidak ditemukan');
    window.location='index.php'
    </script>
    ";
}

// Jika datanya enggak ada, diberi Alert
}

?>