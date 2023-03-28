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
?>
<?php include '../layout/header.php' ?>
<div class="row">
    <div class="col-md-3">
        <?php require '../layout/sidebar.php';?>
    </div>
    <div class="col-md-9">
        <div class="content">
            <h1>Halo, <?= $_SESSION["nama_lengkap"]; ?><br/>Ini Adalah Halaman Admin</h1>
            <a href="../logout.php">logout</a>
        </div>
    </div>
</div>
<?php include '../layout/footer.php' ?>