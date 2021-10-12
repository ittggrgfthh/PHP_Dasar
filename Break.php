<?php

$counter = 1;
while (true){
    echo "Ini adalah While loop ke-$counter\n";
    $counter++;
    //ini akan membuat endless loop, kita bisa menghentikan dengan break
    if ($counter > 10){
        break;
    }
}
?>