<?php

// ABSTRACT CLASS - kelas yang tidak memerlukan instansiasi
abstract class Buah
{
    private $jenis;
    // harus ada METHOD ABSTRACT - sebagai representasi - membantu dlm bekerja tim
    abstract public function makan();
    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }
}

class Apel extends Buah
{
    public function makan()
    {
        echo "Gigit dan kunyah sampai tengah..";
    }
}

class Jeruk extends Buah
{
    public function makan()
    {
        echo "Kupas dulu, kemudian kunyah satu per satu..";
    }
}


$apel = new Apel();
$jeruk = new Jeruk();
echo " Makan Apel : {$apel->makan()} <br>";
echo " Makan Jeruk : {$jeruk->makan()}";
