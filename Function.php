<?php

function sayHello(){
    echo "Halo ini adalah function\n";
}
sayHello();
//begitulah cara penggunaan function
//dalam php function sangat fleksibel bisa dideklarasikan dimanapun

$buat = true;

if ($buat){
    function tulisHalo(){
        echo "Halo\n";
    }
}
tulisHalo();
//tapi ingat jika hasil if salah maka akan terjadi error karena function tidak dideklarasikan
?>