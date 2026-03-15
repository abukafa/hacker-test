<?php

require_once 'init.php';

$produk1 = new Komik("Naruto", "Masasi Kishimoto", 30000, 100);
$produk2 = new Game("Uncharted", "Drunkmenn", 25000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk1->setDiskon(30);
echo $produk1->getHarga();
echo "<hr>";
