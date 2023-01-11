<?php

class Komik extends Produk
{
    public $hal;
    // OVERIDING - menimpa fungsi yang sama pada parent nya
    public function __construct($judul = 'Judul', $author = 'Author', $harga = 0, $hal = 0)
    {
        // static method - mengambil dari parent nya
        parent::__construct($judul, $author, $harga);
        $this->hal = $hal;
    }
    public function getInfoProduk()
    {
        return "Komik : " . parent::getInfoProduk() . " - {$this->hal} Jam.";       // OVERIDING @ INHERITANCE - pewarisan - mengambil fungsi dari parent nya
    }
}
