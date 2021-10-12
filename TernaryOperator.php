<?php

$gender = "WANITA";
$hi = null;
/*
if ($gender == "PRIA"){
    $hi = "Hi, bro!";
}
else {
    $hi = "Hi, nona!";
}
*/
//akan panjang jika menggunakan if statement, bisa kita singkat menggunakan ternary operator

$hi = $gender == "PRIA" ? "Hi, bro!" : "Hi, nona!";
//anngap saja setelah ? adalah if dan : adalah else
echo $hi . "\n";

?>