<?php
// Static Key biasa digunakan untuk helper function, membuat code seperti procedural
// Tidak perlu instansiasi, meski diinstansiasi nilai nya tidak akan direset

class ContohStatic
{
    public static $angka = 1;

    public static function hello()
    {
        // $this-> : untuk property pada class yang sudah diinstansiasi
        // seft : untuk properti pada class static 
        return "Halo " . self::$angka++ . " Kali";
    }
}

echo "=== Class Static <br>";
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::hello();
echo "<br>";
echo ContohStatic::hello();
echo "<hr>";




// dinamic class with instans
class ContohSatu
{
    public $angka = 1;

    public function hello()
    {
        return "Halo " . $this->angka++ . " Kali";
    }
}

$instant = new ContohSatu();
echo "=== Instansiasi <br>";
echo $instant->hello();
echo "<br>";
echo $instant->hello();
echo "<br>";
$instant2 = new ContohSatu();
echo "=== Instansiasi <br>";
echo $instant2->hello();
echo "<br>";
echo $instant2->hello();
echo "<hr>";


// Static class with instans
class ContohDua
{
    public static $angka = 1;

    public function hello()
    {
        return "Halo " . self::$angka++ . " Kali";
    }
}

$instant = new ContohDua();
echo "=== Instansiasi <br>";
echo $instant->hello();
echo "<br>";
echo $instant->hello();
echo "<br>";
$instant2 = new ContohDua();
echo "=== Instansiasi <br>";
echo $instant2->hello();
echo "<br>";
echo $instant2->hello();
echo "<hr>";


// CONSTANT & DEFINE - global variable
define('NAMA', 'Abu Kafa');
const UMUR = 33;

echo "=== Constant <br>";
echo "Nama saya " . NAMA . ", Umur saya " . UMUR . " tahun. <br>";
echo "Line : " . __LINE__ . "<br>";
echo "Dir : " . __DIR__ . "<br>";
echo "File : " . __FILE__ . "<br>";
