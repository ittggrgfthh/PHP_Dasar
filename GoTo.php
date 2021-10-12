<?php


goto a;
echo "Hello World\n";

a:
echo "Hello A\n";
//fitur goto memperbolehkan kita untuk meloncati program

$counter = 1;
while (true){
    echo "Ini adalah While loop ke-$counter\n";
    $counter++;
    //ini akan membuat endless loop, kita bisa menghentikan dengan break
    if ($counter > 10){
        goto end;
    }
}   
end:
echo "End Loop!";
//harap bijak dalam menggunakan fungsi goto karena semakin banyak digunakan akan membuat bingung
//tidak disarankan digunakan dalam skala banyak walaupun fitur ini menarik
?>