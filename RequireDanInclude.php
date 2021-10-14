<?php
include "Lib/myFunction.php";
//include "Lib/myFunction.php"; 
include_once "Lib/myFunction.php";

echo sayHello("Farhan", "Taqi");
//dapat menggunakan include atau require, jika file yang diberikan salah, require akan memberi tahu bahwa
//file tidak ada, sedangkan include akan memberi tahu bahwa fungsi sayHello belum dideklarasikan
//juga jangan lupa dengan posisi, jika include/require ditulis setelah pemanggil maka sama saja kita tidak
//pernah memanggil function tersebut. jika kita melakukan include 2 kali pada file yang sama maka akan
//error karena ini sama saja kita mendeklarasikan kembali functionnya yang mana di PHP tidak diperbolehkan
//kita bisa menghindari ini dengan include_once atau require_once, untuk memastikan kita hanya 1 load file.
?>