<?php
//home.php
// Memasukkan file session.php yang berisi fungsi-fungsi terkait sesi
require_once 'session.php';

// Memasukkan file user.php yang berisi definisi kelas User
require_once 'user.php';

// Memulai sesi PHP
startSession();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    // Jika tidak, arahkan ke halaman index.php
    header("Location: index.php");
    exit();
}

// Mengambil objek User dari sesi
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Home</title>
</head>
<body>
    <h1>Welcome, <?php echo $user->username; ?>!</h1>
    <h2>Books Available for Borrowing</h2>
    <?php
    // Memasukkan file book.php yang berisi definisi kelas Book
    require_once 'book.php';

    // Inisialisasi array buku dengan objek-objek Book
    $books = [
        new Book("To Kill a Mockingbird", "Harper Lee"),
        new Book("1984", "George Orwell"),
        new Book("The Great Gatsby", "F. Scott Fitzgerald")
    ];

    // Iterasi melalui array buku
    foreach ($books as $book) {
        // Memeriksa ketersediaan buku
        if ($book->availability) {
            // Menampilkan informasi buku dan formulir peminjaman
            echo "<p>{$book->title} by {$book->author}</p>";
            echo "<form action='borrow.php' method='post'>";
            echo "<input type='hidden' name='bookTitle' value='{$book->title}'>";
            echo "<input type='submit' value='Borrow'>";
            echo "</form>";
        }
    }
    ?>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
