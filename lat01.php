<?php 



function nama(){
    echo "Nama saya M. Roihan";
}

nama();
echo "<br>";

function luaspersegi($l = 0, $p = 0){
    
    $hasil = $l * $p;
    echo $hasil;
}

function luas ($l = 5, $p = 3){
    $hasil = $l * $p;
    return $hasil;
}

function output(){
    return "Belajar Function";
}

'<h1>'. luas(). '</h1>';

?>