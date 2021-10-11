<?php 

$first = [
    "namaDepan" => "Farhan"
];

$last = [
    "namaDepan" => "Budi",
    "namaBelakang" => "Taqi"
];

$full = $first + $last; //Budi akan di abaikan karena yang $first lebih dahulu dipanggil
var_dump($full);

$a = [
    "namaDepan" => "Farhan",
    "namaBelakang" => "Taqi"
];

$b = [
    "namaBelakang" => "Taqi",
    "namaDepan" => "Farhan"
];

var_dump($a == $b); //akan true karena key-nya sama
var_dump($a === $b); //akan false karena berbeda identity nya, akan mengecek posisi juga tidak hanya key-nya
?>
