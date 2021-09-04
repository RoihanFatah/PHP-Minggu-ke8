<?php 

// $buah = array("mangga","apel","pisang",100);

// echo "<br>";

// foreach ($buah as $key) {
//     echo $key;
//     echo "<br>";
// }

$nama = array (
    "budi" => "sidoarjo",
    "tejo" => "surabaya",
    "andi" => "malang"
);

foreach ($nama as $key => $value) {
    echo $key. ",". $value;
    echo "<br>";
}

?>