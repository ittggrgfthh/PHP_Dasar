<?php

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName\n";
}

sayHello("Farhan", "strtoupper");
sayHello("Farhan", "strtolower");
sayHello("Farhan", function(string $name): string{
    return strtoupper($name);
});
//atau bisa menggunakan arrow function
sayHello("Farhan", fn($name) => strtoupper($name));
?>