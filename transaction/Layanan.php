<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <link rel="stylesheet" href="../assets/style.css">

</head>

<body>
    <div class="container">
        <img src="../assets/img/Logo-warung3.png" class="logo" alt="Logo warung" width="100px" height="80px">
    </div>
    <header>
        <nav>
            <button><a href="../tentang.html">Tentang</a></button>
            <button><a href="Hubungi.html">Hubungi</a></button>
            <button><a href="../order.html">order</a></button>

        </nav>
    </header>
    <p>Selamat Di Layanan Kami Semoga Senang Dengan Menu Kami, Kalo ada Keluhan Silahkan Klik Hubungin Yang ada di</p>

    <form method="post">
        Nama Customer
        <input type="text" name="nama"><br>

        No HP
        <input type="text" name="hp"><br>

        Nama Makanan
        <input type="text" name="Makanan"><br>

        Keluhan
        <textarea name="keluhan"></textarea><br>

        <button type="submit">Terima Barang</button>
    </form>

</body>

</html>



<?php

$tahun = date("Y");
$nomor = rand(100,999);

$kode_layanan = "SRV-" . $tahun . "-" . $nomor;

$nama_customer = $_POST['nama'];
$no_hp = $_POST['hp'];
$Makanan = $_POST['Makanan'];
$minuman = $_POST['minuman'];
$keluhan = $_POST['keluhan'];
$tanggal = date("Y-m-d");
$status = "Diproses";

echo "Kode Layanan: " . $kode_layanan;
echo "<br>Nama Customer: " . $nama_customer;
echo "<br>No HP: " . $no_hp;
echo "<br>Makanan: " . $Makanan;
echo "<br>Minuman: " . $minuman;
echo "<br>Keluhan: " . $keluhan;
echo "<br>Status: " . $status;

?>