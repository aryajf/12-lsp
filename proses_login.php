<?php
session_start();
include 'functions.php';

// Menangkap data yang dikirim dari login
$username = $_POST['username'];
$password = $_POST['pass'];

// Menyeleksi data dan dicocokan pada table admin xampp
$data = mysqli_query($conn, "select * from user where username='$username' and roles='Admin'");

// Menghitung jumlah data yang ditemukan
if ($data > 0) {
    if ($roles == 'true') {
        header('Location:admin/index.php');
    }else {
        header('Location:customer/index.php');
    }
}else {
    header('location:login.php?pesan=Silahkan daftar terlebih dahulu');
}