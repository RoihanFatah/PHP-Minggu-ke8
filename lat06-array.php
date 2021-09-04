<?php 

//ARRAY DIMENSI
// $buah = array("Mangga","Apel","Pisang","Jeruk","Lemon");



// echo "<br>";

// // for ($i=0; $i < 6 ; $i++) { 
// //     // echo $i;
// //     echo $nama[$i];
// //     echo "<br>";
// // }

// foreach ($buah as $key => $value) {
//     echo $value. "<br>";
// }

//ARRAY ASOSIATIF

$nama = array (
    "Roihan" => "Perum TAS",
    "Roi" => "Perum Pecundang",
    "Han" => "Perum Bodoh",
    "Fatah" => "Perum aneh"
);

var_dump ($nama);

echo "<br>";
echo "<br>";

foreach ($nama as $key => $value) {
    echo $key. "=>". $value;
    echo "<br>";
}

?>