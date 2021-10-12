<?php

$counter = 1;
do {
    echo "Ini adalah do while loop ke - $counter\n";
    $counter++;
} while ($counter <= 10);
//do while akan dilakukan setidaknya 1 kali karena dilakukan dulu blocknya baru di cek kondisinya
//jika kondisi salah maka tidak akan dilanjutkan
$counter = 100;
do {
    echo "Ini adalah do while loop ke - $counter\n";
    $counter++;
} while ($counter <= 10);
?>