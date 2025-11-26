<?php
class Buku {
    // PRIVATE → hanya bisa diakses dari dalam class
    private $judul, $penulis, $harga, $stok;

    // CONSTRUCTOR → langsung mengisi data saat membuat objek
    public function __construct($judul, $penulis, $harga, $stok = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // GETTER → mengambil data
    public function getInfo() {
        return "{$this->judul} - {$this->penulis} (Stock : {$this->stok}) | Harga : {$this->harga}";
    }

    // SETTER → mengubah data dengan validasi
    public function setHarga($harga) {
        if ($harga >= 0) $this->harga = $harga;
    }

    // METHOD BISNIS
    public function tambahStok($jumlah) {
        $this->stok += $jumlah;
    }

    public function kurangiStok($jumlah) {
        if ($jumlah <= $this->stok) {
            $this->stok -= $jumlah;
        }
    }
}

// PEMAKAIAN
$buku = new Buku("Laskar Pelangi", "Andrea Hirata", 85000, 10);

echo $buku->getInfo();        // Lihat info

$buku->setHarga(90000);        // Ubah harga
$buku->tambahStok(5);         // Tambah stok
$buku->kurangiStok(3);        // Kurangi stok

echo "<br>";

echo "<br>Info baru: " . $buku->getInfo();
?>
