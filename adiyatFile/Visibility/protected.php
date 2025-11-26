<?php
// KELAS INDUK
class Produk {
    protected $kode;
    protected $nama;
    protected $harga;
    
    public function __construct($kode, $nama, $harga) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
    }
    
    // Method public yang bisa diakses siapa saja
    public function getInfo() {
        return "{$this->kode} - {$this->nama} - Rp " . number_format($this->harga, 0, ',', '.');
    }
    
    // Protected method - hanya bisa diakses oleh kelas ini dan turunannya
    protected function calculateDiscount($persentase) {
        return $this->harga * ($persentase / 100);
    }
}

// KELAS TURUNAN (INHERITANCE)
class Buku extends Produk {
    private $penulis;
    private $halaman;
    
    public function __construct($kode, $nama, $harga, $penulis, $halaman) {
        parent::__construct($kode, $nama, $harga);
        $this->penulis = $penulis;
        $this->halaman = $halaman;
    }
    
    // Bisa akses protected property dari kelas induk
    public function getDetailInfo() {
        return "Buku: {$this->nama} oleh {$this->penulis} - {$this->halaman} halaman - Rp " . number_format($this->harga, 0, ',', '.');
    }
    
    // Bisa akses protected method dari kelas induk
    public function getHargaSetelahDiskon($persentase) {
        $diskon = $this->calculateDiscount($persentase); // ✅ Bisa akses protected method
        $hargaDiskon = $this->harga - $diskon; // ✅ Bisa akses protected property
        return "Harga setelah diskon {$persentase}%: Rp " . number_format($hargaDiskon, 0, ',', '.');
    }
}

class Elektronik extends Produk {
    private $merek;
    private $garansi;
    
    public function __construct($kode, $nama, $harga, $merek, $garansi) {
        parent::__construct($kode, $nama, $harga);
        $this->merek = $merek;
        $this->garansi = $garansi;
    }
    
    public function getDetailInfo() {
        return "Elektronik: {$this->nama} ({$this->merek}) - Garansi {$this->garansi} tahun - Rp " . number_format($this->harga, 0, ',', '.');
    }
    
    public function getHargaSetelahDiskon($persentase) {
        $diskon = $this->calculateDiscount($persentase);
        $hargaDiskon = $this->harga - $diskon;
        return "Harga setelah diskon {$persentase}%: Rp " . number_format($hargaDiskon, 0, ',', '.');
    }
}

// PENGGUNAAN PROTECTED
echo "\n=== PROTECTED VISIBILITY ===\n";

$buku = new Buku("BK001", "Pemrograman PHP", 120000, "John Doe", 300);
$laptop = new Elektronik("EL001", "Laptop Gaming", 15000000, "ASUS", 2);

echo $buku->getInfo() . "\n";
echo $buku->getDetailInfo() . "\n";
echo $buku->getHargaSetelahDiskon(10) . "\n";

echo "\n" . $laptop->getInfo() . "\n";
echo $laptop->getDetailInfo() . "\n";
echo $laptop->getHargaSetelahDiskon(15) . "\n";

// ❌ INI AKAN ERROR karena method protected
// echo $buku->calculateDiscount(10); // Fatal error: Call to protected method
?>