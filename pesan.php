<?php 

require 'functions.php';
$id = $_GET["id"];

if(pesanProduk($id) > 0){
        echo var_dump($qty);
        echo "
        <script type='text/javascript'>
        alert('Produk Berhasil Dipesan');
        
        </script>
        ";
    }else{    
        echo var_dump($qty);
        echo "
            <script type='text/javascript'>
            alert('Produk Gagal Dipesan');
           
        </script>
        ";
}
