<?php

function sum(int $first, int $second){
    $total = $first + $second;
    return $total;
}
$result = sum(10, 10);
var_dump($result);
$result = sum(100, 100);
var_dump($result);

function getFinalValue(int $value){
    if ($value >= 80){
        return "A";
    }
    else if ($value >= 70){
        return "B";
    }
    else if ($value >= 60){
        return "C";
    }
    else if ($value >= 50){
        return "D";
    }
    else {
        return "E";
    }
}
$score = getFinalValue(90);
var_dump($score);

//kita juga bisa menambahkan tipe data untuk return, dengan menambahkan : setelah, function $name() : 
function tambah(int $first, int $second) : int{
    $total = $first + $second;
    return $total;
}
$hasil = tambah(100,20);
var_dump($hasil);
//dengan ini return akan diketahui apa tipenya dan jika tipe yang direturn salah maka akan error
?>