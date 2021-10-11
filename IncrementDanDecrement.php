<?php 

$a = 10;
var_dump($a);

$b = $a++;//post increment, $a diberikan ke $b baru ditambah 1, karena itu $b masih 10
var_dump($b);

$c = ++$a;//pre increment, $a ditambah 1 dulu baru diberikan ke $b
var_dump($c);
//decrement hanya kebalikannya saja jika increment ditambah 1 maka decrement dikurangi 1
?>
