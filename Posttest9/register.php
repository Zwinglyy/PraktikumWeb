<?php
//register.php
// Memasukkan file session.php yang berisi fungsi-fungsi terkait sesi
require_once 'session.php';

// Memasukkan file user.php yang berisi definisi kelas User
require_once 'user.php';

// Memulai sesi PHP
startSession();

// Memeriksa apakah pengguna sudah login
if (isset($_SESSION['user'])) {
    // Jika sudah, arahkan ke halaman home.php
    header("Location: home.php");
    exit();
}

// Memeriksa apakah terdapat permintaan POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data username dan password dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Membuat objek User dengan data yang diterima dari formulir
    $user = new User($username, $password);

    // Menyimpan objek User ke dalam sesi PHP
    $_SESSION['user'] = $user;

    // Mengarahkan kembali ke halaman index.php
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <!-- Formulir untuk melakukan registrasi -->
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
