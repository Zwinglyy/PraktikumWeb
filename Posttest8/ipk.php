<?php
$kosong = [];
$kosong = $_POST;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah_matkul = count($_POST) - 1; 
    $total_nilai = 0;
    
    foreach ($_POST as $key => $value) {
        if (strpos($key, "nilai_matkul") !== false) { 
            $nilai = (float) $value; // nilai nya jadi float
            $total_nilai += $nilai;
        }
    }

    $ipk = $total_nilai / $jumlah_matkul ;

    echo "Total Nilai: " . $total_nilai;
    echo "Jumlah Matkul: " . $jumlah_matkul;
    echo "IPK: " . $ipk;

    // Menentukan kelulusan berdasarkan IPK
    if ($ipk >= 75) {
        echo "Status: Lulus";
    } else {
        echo "Status: Tidak Lulus";
    }

}
?>
