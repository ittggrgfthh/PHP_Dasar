<?php 

//Tipe data null bisa digunakan untuk mengosongkan variabel
//case insensitive
$nama = "Farhan";
echo "Nama : ";
echo $nama;
echo "\n";

$nama = null;
echo "Nama : ";
echo $nama;
echo "\n";

$umur = null;
echo "Umur : ";
echo $umur;
echo "\n";
//atau bisa untuk meng-set variabel menjadi kosong

//mengecek apakah variabel = null
echo "Apakah Nama Null? : ";
echo is_null($nama);
echo "\n";
//return is_null adalah boolean
//atau menggunakan var_dump agar lebih udah dibaca
echo "Apakah Nama Null? : ";
var_dump(is_null($nama));
//jangan menggunakan is_null untuk variabel yang tidak ada karena null dan tidak ada itu berbeda
//is_null digunakan untuk mencari tahu apakah value variabel kosong atau tidak

//menghapus variabel
$contoh = "ini contoh";
unset($contoh);
//echo $contoh;
echo "\n";
//menggunakan unset akan menghapus variabel dan kita tidak bisa menggunakannya lagi 

//agar lebih aman bisa menggunakan isset, digunakan untuk mengecek apakah variabel ada dan value-nya tidak null
$cobaIsset = "coba fungsi isset";
echo "isset : ";
var_dump(isset($cobaIsset));

$cobaIsset = null;
echo "isset : ";
var_dump(isset($cobaIsset));
echo "\n";
?>
