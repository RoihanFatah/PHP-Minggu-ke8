<?php 

$tanggal = 0;
// $hasil = ;

if ($tanggal < 32) {
    echo 'benar';
} else {
    echo 'salah';
}

echo "<br>";

$nilai = 200;

// if ($nilai <= 100) {
//     if ($nilai <= 0) {
//         echo "Nilai Salah";
//     } else {
//         echo "Nilai Benar";
//     }
// } else {
//     echo "Nilai Salah";
// }

// if ($nilai >= 0 && $nilai <=100) {
//     echo "Nilai Benar";
// } else {
//     echo "Nilai Salah";
// }

if ($nilai <= 0 || $nilai >= 100) {
    echo "Nilai Salah";
} else {
    echo "Nilai Benar";
}



?>