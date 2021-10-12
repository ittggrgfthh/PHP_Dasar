<?php

for ($counter = 1; $counter <=10; $counter++){
    echo "Ini adalah for loop ke - $counter\n";
}
//for loop akan berjalan selama kondisi terpenuhi
//statement dalam for tidak wajib diisi, dan jika statemnt tidak diisi semua maka akan menjadi endless loop

//post statement juga bisa diganti menjadi decrement
for ($counter = 10; $counter >= 1; $counter--){
    echo "Ini adalah for loop ke - $counter\n";
}

//syntax alternatif
for ($counter = 1; $counter <=10; $counter++):
    echo "Ini adalah for loop ke - $counter\n";
endfor;
//tetap disarankan menggunakan kurung kurawal {}, karena lebih familiar dan lebih banyak dipakai
?>