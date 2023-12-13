<?php
//Borrow.php
// Memasukkan file session.php yang berisi fungsi-fungsi terkait sesi
require_once 'session.php';

// Memasukkan file book.php yang berisi definisi kelas Book
require_once 'book.php';

// Memulai sesi PHP
startSession();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    // Jika tidak, arahkan ke halaman index.php
    header("Location: index.php");
    exit();
}

// Memeriksa apakah ada permintaan POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil judul buku yang dipilih dari formulir
    $bookTitle = $_POST['bookTitle'];

    // Inisialisasi array buku dengan objek-objek Book
    $books = [
        new Book("To Kill a Mockingbird", "Harper Lee"),
        new Book("1984", "George Orwell"),
        new Book("The Great Gatsby", "F. Scott Fitzgerald")
    ];

    // Iterasi melalui array buku
    foreach ($books as $book) {
        // Memeriksa apakah judul buku cocok dengan yang dipilih
        if ($book->title === $bookTitle) {
            // Meminjam buku dan menampilkan pesan sesuai hasil
            if ($book->borrow()) {
                echo "<h2>Successfully borrowed {$book->title}!</h2>";
            } else {
                echo "<h2>{$book->title} is already borrowed.</h2>";
            }
            break;
        }
    }

    // Menampilkan tautan untuk kembali ke halaman home.php
    echo "<a href='home.php'>Go back</a>";
}
?>
