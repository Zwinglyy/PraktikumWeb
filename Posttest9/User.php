<?php
//user.php
// Definisi kelas User untuk merepresentasikan objek pengguna
class User {
    public $username;
    public $password;

    // Konstruktor untuk inisialisasi objek User dengan username dan password
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
}

// Inisialisasi array untuk menyimpan data pengguna terdaftar
$registeredUsers = [];

// Fungsi untuk mendaftarkan pengguna baru
function register($username, $password) {
    global $registeredUsers;

    // Periksa apakah akun sudah terdaftar
    foreach ($registeredUsers as $registeredUser) {
        if ($registeredUser->username === $username) {
            return false; // Akun sudah terdaftar
        }
    }

    // Jika akun belum terdaftar, buat objek User dan tambahkan ke array
    $newUser = new User($username, $password);
    $registeredUsers[] = $newUser;

    return true; // Pendaftaran berhasil
}

// Fungsi untuk melakukan login
function login($username, $password) {
    global $registeredUsers;

    $userExists = false;

    // Periksa apakah pengguna dengan username dan password tertentu ada dalam array
    foreach ($registeredUsers as $registeredUser) {
        if ($registeredUser->username === $username && $registeredUser->password === $password) {
            $userExists = true;
            break;
        }
    }

    // Tampilkan pesan login berhasil atau pesan kesalahan
    if ($userExists) {
        echo "Login successful!";
    } else {
        echo '<script>alert("Salah email atau password nya")</script>';
    }
}
?>
