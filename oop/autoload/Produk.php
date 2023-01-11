<?php

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
