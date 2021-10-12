<?php

$counter = 1;
while ($counter <= 10){
    echo "Ini adalah while loop ke - $counter\n";
    $counter++;
}
//while adalah versi lite-nya for, hanya ada kondisi saja pada statement fungsinya

//syntax alternatif
$counter = 1;
while ($counter <= 10):
    echo "Ini adalah while loop ke - $counter\n";
    $counter++;
endwhile;
?>