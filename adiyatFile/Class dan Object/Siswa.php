<?php
class Siswa {
    // PROPERI
    public $nama;
    public $nisn;
    public $jurusan;
    public $br = "<br>";
    
    // METHOD
    public function perkenalan() {
        return "Halo, saya {$this->nama} (nisn: {$this->nisn}) dari jurusan {$this->jurusan}{$this->br}";
    }
    
    public function belajar($pelajaran) {
        return "{$this->nama} sedang belajar {$pelajaran}{$this->br}";
    }
}

// BUAT OBJEK
$siswa1 = new Siswa();
$siswa1->nama = "Adiyat Ferdianata";
$siswa1->nisn = "007218656";
$siswa1->jurusan = "Rekayasa Perangkat Lunak";

$siswa2 = new Siswa();
$siswa2->nama = "Rifa Ayu Fadhillah";
$siswa2->nisn = "############";
$siswa2->jurusan = "Akuntansi dan Keuangan Lembaga";

// GUNAKAN OBJEK
echo $siswa1->perkenalan();
echo $siswa2->perkenalan();

echo "<br>";

echo $siswa1->belajar("Pemrograman");
echo $siswa2->belajar("Basis Data");
?>