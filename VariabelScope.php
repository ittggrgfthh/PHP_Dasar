<?php

$name = "Farhan"; //variabel global juga tidak bisa mengakses variabel lokal

function sayHello(){
    global $name; //dengan memberikan kata kunci global maka kita bisa mengaksesnya dari lokal
    echo $name . "\n";//varibel lokal tidak dapat mengakses variabel global
    //atau kita bisa mengakses dengan $GLOBALS[];
    echo $GLOBALS["name"] . "\n";
}
sayHello();

//variabel static scope
function increment(){
    $counter = 1;
    echo "Counter = $counter\n";
    $counter++;
}
increment();
increment();
increment(); //mau berapa kali pun dipanggil maka sebuah function akan tereset/masa hidupnya berakhir
//agar bisa memakai hasil dari variabel yang sudah dipakai, bisa menggunakan scope static

function menambah(){
    static $counter = 1;
    echo "Counter = $counter\n";
    $counter++;
}
menambah();
menambah();
menambah(); //maka kita bisa memakai perubahan dari fungsi sebelumnya
?>