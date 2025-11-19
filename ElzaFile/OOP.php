<?php

class User {
    // Properti
    public $name;        // Bisa diakses dari mana saja
    private $email;      // Hanya bisa diakses dalam class
    public $alamat;

    // Constructor (otomatis dipanggil saat objek dibuat)
    public function __construct($name, $email, $alamat) {
        $this->name = $name;
        $this->setEmail($email); // Gunakan setter agar validasi aman
        $this->setAlamat($alamat); // Panggil setter alamat yang benar
    }

    // Setter (mengatur nilai email)
    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Email tidak valid!<br>";
        }
    }

    // Getter (mengambil nilai email)
    public function getEmail() {
        return $this->email;
    }

    // Setter alamat
    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    // Getter alamat
    public function getAlamat() {
        return $this->alamat;
    }

    // Method menampilkan info user
    public function tampilkanInfo() {
        echo "Nama: " . $this->name . "<br>";
        echo "Email: " . $this->getEmail() . "<br>";
        echo "Alamat: " . $this->getAlamat() . "<br>";
    }
}

// -----------------------------------------------------

// Membuat objek dari class User
$user1 = new User("ElzaFikriDinata", "elza@example.com", "Delituaaaaaaa");

// Mengubah data melalui setter
$user1->setEmail("elzaDinata360@gmail.com");
$user1->setAlamat("Delitua,Perumahan DeliKencana Blok-F-09");

// Menampilkan info user
$user1->tampilkanInfo();

?>
