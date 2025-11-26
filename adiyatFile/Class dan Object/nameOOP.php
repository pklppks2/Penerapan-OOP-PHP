<?php
// CLASS - Template (hanya definisi)
class Mobil {

    // PROPERTY
    public $merk;
    
    // METHOD
    public function klakson() {
        return "Tin tin!";
    }
}

// OBJECT - Realisasi (bisa banyak)
$mobil1 = new Mobil();  // Objek pertama
$mobil2 = new Mobil();  // Objek kedua
$mobil3 = new Mobil();  // Objek ketiga

echo $mobil1->klakson();
echo $mobil2->klakson();
echo $mobil3->klakson();

