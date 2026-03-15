<?php

// INTERFACE = ABSTRACT CLASS yang lebih specific
interface Buah
{
    // Tidak boleh ada property & semua method otomatis abstract
    public function makan();
    public function setJenis($jenis);
}
interface Benda
{
    public function setUkuran($ukuran);
}

class Apel implements Buah, Benda
{
    public $jenis;
    protected $ukuran;
    public function makan()
    {
        echo "Gigit dan kunyah sampai tengah..";
    }
    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }
    public function setUkuran($ukuran)
    {
        $this->ukuran = $ukuran;
    }
}

class Jeruk implements Buah
{
    protected $jenis;
    public function makan()
    {
        echo "Kupas dulu, kemudian kunyah satu per satu..";
    }
    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }
}


$apel = new Apel();
$apel->setJenis('hijau');
$jeruk = new Jeruk();
echo " Makan Apel  {$apel->makan()} {$apel->jenis} <br>";
echo " Makan Jeruk  {$jeruk->makan()} <hr>";
