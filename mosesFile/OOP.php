<?php 
// kelas
class Mobil {
    // properti
    public  $merk;

    private $warna, 
            $harga;
    // konstruktor
    public function __construct($merk = "judul", $warna = "warna", $harga = 0) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
    }   
    // method
    public function infoMobil() {
        echo "Merk: {$this->merk}<br>";
        echo "Warna: {$this->warna}<br>";
        echo "Harga: Rp {$this->harga}<br><br>";
    }
    // getter
    public function getWarna() {
        return $this->warna;
    }
    public function getHarga() {
        return $this->harga;
    }
    // setter
    public function setWarna($warnaBaru) {
        $this->warna = $warnaBaru;       

    }
    public function setHarga($hargaBaru) {
        if ($hargaBaru > 0) {
            $this->harga = $hargaBaru;
        }
    }

}

// objek
$avanza = new Mobil("Toyota Avanza", "Hitam", 250000000);
echo "info mobil<br> ";
$avanza->infoMobil();

 
// ubah properti private
$avanza->setWarna("Putih");
$avanza->setHarga(260000000);
echo "=== Data Setelah Diubah ===<br>";
$avanza->infoMobil();


$avanza->merk = "Toyota Rush";
echo "Merk setelah diubah: " . $avanza->merk . "<br>";  





?>