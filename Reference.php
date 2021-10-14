<?php

$name = "Farhan\n";

$otherName = $name;
$otherName = "Taqi\n";

echo $name;
echo $otherName;
//tanpa reference $otherName tidak memiliki akses merubah $name, atau sama halnya kita mengcopy value $name.
//dengan reference $otherName dapat memiliki akses kepada $name, jadi jika file $otherName berubah, maka
//$name juga ikut terubah.
$nama = "Farhan\n";

$namaLain = &$nama;
$namaLain = "Taqi\n";

echo $nama;
echo $namaLain;

//atau contoh dengan fungsi, kita dapat mengirim pass by reference atau pass by value.
//pass by value.
function increment($value){
    $value++;
}
$counter = 1;
increment($counter);

echo $counter . "\n"; //dengan pass by value, maka hanya value saja yang dikirim/di-copy
//maka hal ini tidak akan merubah $counter.
//pass by reference.
function menambah(&$value){
    $value++;
}
$a = 1;
menambah($a);
echo $a . "\n"; //dengan pass reference sama saja kita memberikan akses untuk merubah variabel 
//yang kita kirimkan.

//return reference
function &getValue(){
    static $value = 100; //static agar tidak ter-reset.
    return $value;
}
$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . "\n"; //dengan reference berarti anda memberikan variabel akses untuk mengubah value
//tidak disarankan kecuali jika perlu, karena bisa membuat bingung
//gunakan dengan bijak, sesuai kebutuhan.
//itu saja materi PHP Dasar dari Programmer Zaman Now, walau mungkin ada beberapa yang berbeda.
//link PZN : https://www.youtube.com/channel/UC14ZKB9XsDZbnHVmr4AmUpQ
?>