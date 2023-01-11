<?php

class Game extends Produk
{
    public $main;
    // OVERIDING - menimpa fungsi yang sama pada parent nya
    public function __construct($judul = 'Judul', $author = 'Author', $harga = 0, $main = 0)
    {
        // static method - mengambil dari parent nya
        parent::__construct($judul, $author, $harga);
        $this->main = $main;
    }
    public function getInfoProduk()
    {
        return "Game : " . parent::getInfoProduk() . " - {$this->main} Jam.";       // OVERIDING @ INHERITANCE - pewarisan - mengambil fungsi dari parent nya 
    }
}
