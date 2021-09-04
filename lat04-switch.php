<?php 

$hari = 8;

// switch ($hari) {
//     case 1:
//         echo "senin";
//         break;
//     case 2:
//         echo "selasa";
//         break;
//     case 3:
//         echo "rabu";
//         break;
//     case 4:
//         echo "kamis";
//         break;
//     case 5:
//         echo "jumat";
//         break;
//     case 6:
//         echo "sabtu";
//         break;
//     case 7:
//         echo "minggu";
//         break;
    
//     default:
//         echo "Hari Salah";
//         break;
// }

$pilihan = 'hapuss';

switch ($pilihan) {
    case 'tambah':
        echo "anda memilih tambah";
        break;
    case 'ubah':
        echo "anda memilih ubah";
        break;
    case 'hapus':
        echo "anda memilih hapus";
        break;
    
    default:
        echo "anda belum memilih";
        break;
}

?>