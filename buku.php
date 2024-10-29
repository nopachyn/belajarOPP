<?php

// Mendefinisikan kelas Buku
class Buku {
    // Atribut kelas
    public $judul;       // Atribut untuk menyimpan judul buku
    public $pengarang;   // Atribut untuk menyimpan nama pengarang
    public $tahunTerbit; // Atribut untuk menyimpan tahun terbit buku

    // Konstruktor untuk menginisialisasi atribut
    public function __construct($judul, $pengarang, $tahunTerbit) {
        $this->judul = $judul; // Mengatur nilai judul
        $this->pengarang = $pengarang; // Mengatur nilai pengarang
        $this->tahunTerbit = $tahunTerbit; // Mengatur nilai tahun terbit
    }

    // Metode untuk menampilkan informasi buku
    public function infoBuku() {
        return "Judul: " . $this->judul . ", Pengarang: " . $this->pengarang . ", Tahun Terbit: " . $this->tahunTerbit;
    }
}

// Membuat objek dari kelas Buku
$buku1 = new Buku("Harry Potter and the Sorcerer's Stone", "J.K. Rowling", 1997);
$buku2 = new Buku("The Hobbit", "J.R.R. Tolkien", 1937);
$buku3 = new Buku("1984", "George Orwell", 1949);

// Memanggil metode pada objek buku dan menampilkan informasi
echo $buku1->infoBuku() . "<br>"; // Menampilkan informasi buku 1
echo $buku2->infoBuku() . "<br>"; // Menampilkan informasi buku 2
echo $buku3->infoBuku() . "<br>"; // Menampilkan informasi buku 3

?>