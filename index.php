<?php
require 'functions.php';
$produk = query("SELECT * FROM produk");
?>

<?php include 'layout/header.php' ?>
    <h1>Halo,Ini Adalah Halaman Customer</h1>
    <!-- Fitur Searching -->
    <form action="index.php" method="get">
        <label for="cari">Cari Produk : </label>
        <input type="text" name="cari">
        <input type="submit" value="search">
    </form>
    <br>
    <!-- Fitur Searching -->

    <?php
    // Judul Pencarian
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        echo "Hasil Pencarian : " . $cari;
    }
    // Judul Pencarian
    ?>


    <!-- Hasil Pencarian -->
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Image</th>
            <th>Stok</th>
            <th>Pesan</th>
        </tr>
        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk LIKE '%" . $cari . "%' ");
        } else {
            $data = mysqli_query($conn, "SELECT * FROM produk");
        }
        $no = 1;
        while ($row = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row["nama_produk"]; ?></td>
                <td><img src="image/<?= $row["foto"]; ?>" alt="" width="100"></td>
                <td><?= $row["stok"]; ?></td>
                <td>
                    <a href="pesan.php?id=<?= $row["id_produk"];  ?>" onclick="return confirm('Apakah Anda Ingin memesan?');">
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <!-- Hasil Pencarian -->

    <a href="login/index.php">Login</a>
    <a href="logout.php">Logout</a>
<?php include 'layout/footer.php' ?>