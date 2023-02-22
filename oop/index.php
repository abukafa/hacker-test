<?php

// CLASS - PARENT - blueprint
class Produk
{
    // PROPERTY - variable di dalam class - VISIBILITY : public (all access), protected (inheritance), private (self)
    protected $judul, $author, $harga, $diskon;

    // CONSTRUCTOR - magic method yang otomatis dijalankan saat class diinstansiasi
    public function __construct($judul = 'Judul', $author = 'Author', $harga = 0)
    {
        $this->judul = $judul;
        $this->author = $author;
        $this->harga = $harga;
    }

    // METHOD - function di dalam class - SETTER
    public function setJudul($judulBaru)
    {
        $this->judul = $judulBaru;
    }
    public function setAuthor($authorBaru)
    {
        $this->author = $authorBaru;
    }
    public function setHarga($hargaBaru)
    {
        $this->harga = $hargaBaru;
    }
    public function setDiskon($diskonBaru)
    {
        $this->diskon = $diskonBaru;
    }

    // METHOD - function di dalam class - GETTER
    public function getJudul()
    {
        return $this->judul;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getDiskon()
    {
        return $this->diskon;
    }
    public function getInfoProduk()
    {
        return "{$this->judul} | {$this->author} (Rp. {$this->harga})";
    }
}

// CLASS - CHILD - dari produk
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

// CLASS - CHILD - dari produk
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
        return "Komik : " . parent::getInfoProduk() . " - {$this->hal} Hal.";       // OVERIDING @ INHERITANCE - pewarisan - mengambil fungsi dari parent nya
    }
}

// CLASS - CHILD - dari produk
class CetakInfo extends Produk
{
    public function produk(Produk $produk)          // OBJECT TYPE - menjadikan Object sebagai tipe data
    {
        return "{$produk->judul} | {$produk->author} (Rp. {$produk->harga})";
    }
}


// OBJECT - instansiasi dari class
$produk1 = new Komik("Naruto", "Masasi Kishimoto", 30000, 100);
$produk2 = new Game("Uncharted", "Drunkmenn", 25000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk1->setDiskon(30);
echo $produk1->getHarga();
echo "<hr>";

$info = new CetakInfo();
echo $info->produk($produk1);
