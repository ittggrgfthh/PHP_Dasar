<?php

function sayHello($name = "Anonymous"){
    echo "Hello $name\n";
}
sayHello("Farhan");
sayHello("Taqi");
sayHello();
//function argument/parameter digunakan seperti diatas, mengikuti apa yang dikirimkan
//dalam argument kita dapat memberikan default, jika tidak ada yang dikirimkan maka default akan dipakai

//memberikan default value pada argument pertama saat ada 2 atau lebih argument tidak terlalu berguna
function tulisHalo($namaDepan, $namaBelakang = ""){
    echo "Halo $namaDepan $namaBelakang\n";
}
tulisHalo("Farhan");
tulisHalo("Farhan","Taqi");

//karena data dinamis akan menyulitkan kita untuk membuat data apa yang boleh masuk dengan itu
//kita dapat memberikan tipe data apa yang boleh dimasukkan ke dalam function
function tambah(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total\n";
}
tambah(100,100);
tambah("100", "100"); //akan secara otomatis dikonversi menjadi int
tambah(true, false);
//tambah([], []); //error karena tipe data array

//variable argument list
function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value; 
    }
    echo "Total " . implode(", ", $values) . " = $total\n";
}
sumAll(1, 2, 3, 4, 5); //membolehkan kita mengirim lebih banyak data
//bagaimana jika kita sudah terlanjur membuat array?
$arrValues = [1, 2, 3, 4, 5];
sumAll(...$arrValues);
?>