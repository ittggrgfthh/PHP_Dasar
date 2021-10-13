<?php

var_dump(join(", ", [1,2,3,4,5])); //mengubah arra
var_dump(explode(" ", "Farhan Taqi Abdussalam")); //memecah string menjadi array
var_dump(strtoupper("farhan taqi abdussalam")); //membuat string menjadi huruf besar
var_dump(strtolower("FARHAN TAQI ABDUSSALAM")); //membuat string menjadi huruf kecil
var_dump(trim("        Farhan     Taqi       ")); //akan menghapus white space di depan dan dibelakang
var_dump(substr("Farhan Taqi Abdussalam", 7, 4)); //akan mengambil beberapa bagian string
//contoh substr diatas adalah dari karakter ke 7 diambil 4 karakter selanjutnya
//view the documentation at : https://www.php.net/manual/en/ref.strings.php
?>