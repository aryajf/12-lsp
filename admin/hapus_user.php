<?php 

require 'functions.php';
$id = $_GET["id"];


if(hapusUser($id) > 0){
        echo "
            <script type='text/javascript'>
            alert('Data Berhasil Dihapus');
            window.location = 'index.php'
        </script>
        ";
    }else{    
        echo "
            <script type='text/javascript'>
            alert('Data Gagal Dihapus');
            window.location = 'index.php'
        </script>
        ";
}
