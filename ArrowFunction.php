<?php

$firstName = "Farhan";
$lastName = "Taqi";

//jika menggunakan anonymous function
$anonymousFunction = function () use ($firstName, $lastName): string{
    return "Hello $firstName $lastName\n";
};

//jika menggunakan arrow function, tersedia di PHP 7.4 ke atas
$arrowFunction = fn() => "Hello $firstName $lastName\n";
//tidak perlu menggunakan return karena arrow func sudah langsung return value

echo $anonymousFunction();
echo $arrowFunction();
?>