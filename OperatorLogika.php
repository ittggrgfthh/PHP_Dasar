<?php 

//operator logika digunakan untuk membandingkan 2 boolean
//value operator logika adalah boolean
var_dump(true && true);
var_dump(true && false);
//and akan benar jika kedua boolean yang dibandingkan benar

var_dump(true || false);
var_dump(false || false);
//or akan benar jika minimal salah satu dari kedua boolean yang dibandingkan benar

var_dump(true xor false);
var_dump(true xor true);
var_dump(false xor false);
//xor benar jika data salah satu data dari kedua boolean yang dibandingkan benar

var_dump(!true);//hanya kebalikan saja !true berarti tidak benar
var_dump(!false);//sama saja
?>
