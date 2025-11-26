<?php
class Buku {
    public $judul;
    public $penulis;
    public $tahunTerbit;
    public $br ="<br>";

    // CONSTRUCTOR Langsung terpanggil ketika objek dibuat
    public function __construct($judul, $penulis, $tahunTerbit = null) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
        echo "Buku '{$judul}' berhasil dibuat!<br><br>";
    }
    
    // METHOD : 
    public function infoLengkap() {
        $tahun = $this->tahunTerbit ? "Tahun: {$this->tahunTerbit}" : "Tahun tidak diketahui"; // OP : TERNARY = JIKA NILAI TAHUN ADA MAKA TAMPILKAN NILAI TAHUN TERSEBUT DAN JIKA NILAI TAHUN TIDAK ADA TAMPILKAN  " Tahun tidak diketahui
        return "{$this->judul} oleh {$this->penulis} ({$tahun}) <br><br>";
    }
    
    public function usiaBuku() {
        if ($this->tahunTerbit) {
            $usia = date('Y') - $this->tahunTerbit;
            return "Buku ini berusia {$usia} tahun <br><br>";
        }
        return "Usia buku tidak diketahui <br><br>";
    }
}

// BUAT OBJEK
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005);
$buku2 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980);
$buku3 = new Buku("Kumpulan Cerpen", "Penulis Anonim"); 


// MENAMPILKAN 
echo $buku1->infoLengkap();
echo $buku2->infoLengkap();
echo $buku3->infoLengkap();


echo $buku1->usiaBuku();
echo $buku2->usiaBuku();
echo $buku3->usiaBuku();
?>
