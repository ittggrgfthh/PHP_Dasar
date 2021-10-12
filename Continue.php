<?php

for ($counter = 1; $counter <= 100; $counter++){
    if ($counter % 2 == 0){
        continue; //dengan continue kita bisa hentikan prulangan saat ini, dan lanjut ke loop selanjutnya
    }
    echo "Counter : $counter\n";
}

?>