<?php

class Buku
{
    // Property (data yang dimiliki objek)
    public $judul;
    public $penulis;
    public $harga;

    // Method untuk mengisi data
    public function isiData($judul, $penulis, $harga)
    {
        $this->judul   = $judul;
        $this->penulis = $penulis;
        $this->harga   = $harga;
    }

    // Method untuk menampilkan data
    public function tampilkan()
    {
        return "Judul: {$this->judul} <br>" .
               "Penulis: {$this->penulis} <br>" .
               "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br><br>";
    }
}

// ---------------------------------------
//               PEMAKAIAN
// ---------------------------------------

$buku1 = new Buku();
$buku2 = new Buku();

// Mengisi data buku 1
$buku1->isiData("Harry Potter", "J.K. Rowling", 150000);

// Mengisi data buku 2
$buku2->isiData("The Hobbit", "J.R.R. Tolkien", 120000);

// Menampilkan
echo $buku1->tampilkan();
echo $buku2->tampilkan();

