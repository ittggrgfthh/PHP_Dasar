<?php

function foo(){
    echo "Foo\n";
}

function bar(){
    echo "Bar\n";
}

$funcCalled = "foo";
$funcCalled();
$funcCalled = "bar";
$funcCalled();

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName\n";
}

function sampleFunction(string $name) :string{
    return "Sample $name";
}
sayHello("Farhan", "sampleFunction");
sayHello("Farhan", "strtoupper");
sayHello("Farhan", "strtolower");
?>