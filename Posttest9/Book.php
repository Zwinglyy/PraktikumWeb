<?php
//Book.php
// Definisi kelas Book untuk merepresentasikan objek buku
class Book {
    public $title;
    public $author;
    public $availability;

    // Konstruktor untuk inisialisasi objek Book dengan judul dan penulis
    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        $this->availability = true;
    }

    // Metode untuk meminjam buku
    public function borrow() {
        if ($this->availability) {
            $this->availability = false;
            return true; // berhasil dipinjam 
        } else {
            return false; // buku sedang di pinjam
        }
    }

    // Metode untuk mengembalikan buku
    public function returnBook() {
        if (!$this->availability) {
            $this->availability = true;
            return true; // berhasil dikembalikan
        } else {
            return false; 
        }
    }
}
?>
