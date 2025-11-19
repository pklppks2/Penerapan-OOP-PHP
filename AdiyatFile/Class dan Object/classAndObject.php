<?php

class Buku {
    // Properti
    public $judul;
    public $penulis;
    public $tahunTerbit;
    public $harga;
    public $br = "<br>";

    // Method
    public function tampilkanInfoBuku(){
        return "Judul : {$this->judul}{$this->br} Penulis : {$this->penulis}{$this->br} Tahun Terbit : {$this->tahunTerbit}{$this->br} Harga : {$this->harga}{$this->br}";
    }
}



$buku1 = new Buku();
$buku2 = new Buku();

// Mengisi
$buku1->judul = "Harry Potter";
$buku1->penulis = "J.K. Rowling";
$buku1->tahunTerbit = "1997";
$buku1->harga = "79.000 - 139.000";

$buku2->judul = "The Hobbit";
$buku2->penulis = "J.R.R. Tolkien";
$buku2->tahunTerbit = "1937";
$buku2->harga = "40.000 - 80.000";


echo $buku1->tampilkanInfoBuku();
echo "<br>";
echo $buku2->tampilkanInfoBuku();




