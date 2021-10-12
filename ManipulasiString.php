<?php 

$nama = "Farhan Taqi Abdussalam";

echo "Nama : " . $nama . "\n";
echo "Hasil : " . 100 . "\n";
//tidak disarankan lagi memakai + karena aplikasi mungkin mengira adalah penghitungan matematika

//merubah tipe data
$hasilString = (string)100;
var_dump($hasilString);

$hasilInt = (int)"100";
var_dump($hasilInt);

$hasilFloat = (float)"100.11";
var_dump($hasilFloat);

$hasilIntSalah = (int)"salah";
var_dump($hasilIntSalah);
//value akan diubah jadi int 0 sama halnya dengan float

//mengakses character
$nama = "farhan";
echo $nama[0] . "\n";
echo $nama[1] . "\n";
//jangan mengakses index yang tidak ada karena akan terjadi error
//ketika membuat string sebenarnya hampir mirip dengan array of character

//variable parsing
echo "Halo $nama, ini adalah variabel parsing\n";
//variabel parsing hanya bisa digunakan double quote dan heredoc saja

//curly brace
$var = "farhan";
echo "ini adalah {$var}s\n";
//jadi dengan ini kita bisa menambahkan s tanpa spasi
?>
