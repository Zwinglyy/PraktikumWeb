<?php
//session.php
// Fungsi untuk memulai atau melanjutkan sesi PHP
function startSession() {
    session_start();
}

// Fungsi untuk menghancurkan sesi, digunakan pada saat logout
function destroySession() {
    // Menghapus semua data yang terkait dengan sesi saat ini
    session_unset();

    // Menghancurkan sesi, sehingga pengguna dianggap logout
    session_destroy();
}
?>
