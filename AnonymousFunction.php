<?php

$sayHello = function(string $name){
    echo "Hello $name\n";
};

$sayHello("farhan");
$sayHello("Taqi");

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName\n";
}

sayGoodBye("Farhan", function(string $name): string{
    return strtoupper($name);
});
//atau anonymous func bisa di taruh di variabel
$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Farhan", $filterFunction);

//anonymous func tidak bisa mengakses variabel dari luar karena itu,
//kita bisa menggunakan use agar func bisa mengakses variabel

$firstName = "Farhan";
$lastName = "Taqi";

$sayHelloFarhan = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName\n";
};
$sayHelloFarhan();

$firstName = "Budi";
$lastName = "Nugraha";
$sayHelloFarhan();
?>