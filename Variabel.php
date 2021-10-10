<?php

//cara membuat variabel dan menggunakannya
$nama = "Farhan";
echo "Nama : ";
echo $nama;
echo "\n";

$umur = 19;
echo "Umur : ";
echo $umur;
echo "\n";
//didepan $tidak boleh ada spasi, penamaan variabel tidak boleh dengan spasi

$nama = 20;
echo "Nama :";
echo $nama;
echo "\n";
//kita bisa mengganti tipe data dari string menjadi integer, yang mana di c++ atau java tidak bisa

//Variable Variables
//fitur ini kemungkinan hanya dimiliki php
//tidak disarankan digunakan, kecuali jika perlu. karena fitur ini akan membuat aplikasi bingung

$contoh = "farhan";
$$contoh = "Taqi";

echo "Contoh : ";
echo $contoh;
echo "\n";

echo "farhan : ";
echo $farhan;
echo "\n";
//fitur ini memungkinkan kita memanggil variabel$$ dengan value varibel$
?>
