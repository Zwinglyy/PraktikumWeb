<?php
//logout.php
// Memasukkan file session.php yang berisi fungsi-fungsi terkait sesi
require_once 'session.php';
// Memulai atau melanjutkan sesi PHP
startSession();
// Menghancurkan sesi, berguna untuk logout
destroySession();
// Mengarahkan ulang pengguna ke halaman index.php setelah logout
header("Location: index.php");
// Menghentikan eksekusi script setelah pengguna diarahkan ulang
exit();
?>
