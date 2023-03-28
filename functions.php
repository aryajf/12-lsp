<?php

$conn = mysqli_connect('localhost', 'root', '', 'printer');

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambahUser($data)
{
    global $conn;

    $nama_lengkap = $data["nama_lengkap"];
    $username = $data["username"];
    $password = $data["password"];
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $roles = $data["roles"];

    $query = "INSERT INTO user VALUES(NULL,'$nama_lengkap', '$username', '$password', '$foto','$roles')";
    move_uploaded_file($files, "image/" . $foto);
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusUser($id)
{
    global $conn;

    $query = "DELETE FROM user WHERE id_user = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function pesanProduk($id)
{
    global $conn;

    $query = "UPDATE produk SET stok = stok-1 WHERE id_produk = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateUser($data)
{
    global $conn;

    $id = $data["id_user"];
    $nama_lengkap = $data["nama_lengkap"];
    $username = $data["username"];
    $password = $data["password"];
    $roles = $data["roles"];

    $query = "UPDATE user SET nama_lengkap = '$nama_lengkap', username = '$username', password ='$password', roles = '$roles' WHERE id_user = '$id'";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}
