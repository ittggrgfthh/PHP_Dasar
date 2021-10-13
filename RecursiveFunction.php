<?php

function factorialLoop(int $value): int{
    $total = 1;

    for ($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(5));
var_dump(1 * 2 * 3 * 4 * 5); //ini benar faktorialnya
//tapi bisa kita permudah dengan menggunakan recursive function
function factorialRecursive(int $value): int{
    if ($value == 1){
        return 1;
    }
    else{
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(5)); //lihat akan lebih simpel menggunakan rekursif
//walaupun menarik, tapi hati-hati jika rekursif terlalu dalam, ada kemungkinan terjadi memory overflow
//dan menyebabkan error, dimana memory yang digunakan program PHP terlalu banyak
function loop(int $value){
    if ($value == 0){
        echo "End loop\n";
    }
    else{
        echo "Loop-$value\n";
        loop($value - 1);
    }
}
loop(1000000); //jangan terlalu banyak melakukan rekursif, karena akan memakan memory terlalu banyak
?>