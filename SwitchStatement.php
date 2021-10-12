<?php

$nilai = "D";

switch($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik\n";
        break;
    case "B":
        echo "Anda lulus\n";
        break;
    case "C":
        echo "Anda lulus\n";
        break;
    case "D":
        echo "Anda tidak lulus\n";
        break;
    default:
    echo "Mungkin anda salah jurusan\n";
}
//percabangan switch lebih simpel karena kondisinya hanya untuk == (sama dengan)/hanya membandingkan saja

//syntax alternatif
switch($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik\n";
        break;
    case "B":
        echo "Anda lulus\n";
        break;
    case "C":
        echo "Anda lulus\n";
        break;
    case "D":
        echo "Anda tidak lulus\n";
        break;
    default:
    echo "Mungkin anda salah jurusan\n";
endswitch;
//tetap direkomendasikan pakai kurung kurawal {} karena lebih familiar, dan sering dipakai
?>