<?php
require 'functions.php';

$id = $_GET['id'];

if(hapusUser($id) > 0){
    ?>
    <script>
        alert('Data Berhasil Dihapus');
        window.location='index.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal Dihapus');
        window.location='index.php';
    </script>
    <?php
}

?>
