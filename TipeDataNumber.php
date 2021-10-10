<?php 

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b1111111111);

echo "Underscore in Number : ";
var_dump(1_234_567);

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notasi Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan Notasi Minus (1.2 x 0.003) : ";
var_dump(1.2e-3);

echo "Underscore di Floating Point : ";
var_dump(1_123.123);

echo "Overflow Integer : "; //melebihi batas int maka akan menjadi float
var_dump(9223372036854775808); //max int x64 bit + 1
 
?>
