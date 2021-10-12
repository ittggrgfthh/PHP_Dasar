<?php 

$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 80){
    echo "Nilai anda A\n";
}
else if ($nilai >= 70 && $absen >= 70){
    echo "Nilai anda B\n";
}
else if ($nilai >=60 && $absen >= 60){
    echo "Nilai anda C\n";
}
else if ($nilai >=50 && $absen >= 50){
    echo "Nilai anda D\n";
}
else {
    echo "Nilai anda di-skip";
}
//dalam percabangan if dapat menggunakan if saja atau if dan else atau if, elseif, dan else
//bisa menggunakan elseif atau else if

//syntax alternatif
if ($nilai >= 80 && $absen >= 80):
    echo "Nilai anda A\n";
    echo "Mantap!";
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai anda B\n";
    echo "Lumayanlah!";
elseif ($nilai >=60 && $absen >= 60):
    echo "Nilai anda C\n";
    echo "Belajar lagi sana";
elseif ($nilai >=50 && $absen >= 50):
    echo "Nilai anda D\n";
    echo "Anda niat ga sih?";
else :
    echo "Nilai anda di-skip";
endif;
//dalam syntax alternatif ini harus diakhiri dengan endif dan hanya bisa menggunakan elseif (tanpa spasi).
//tapi tetap saja lebih familiar menggunakan kurung kurawal {} karena juga digunakan di bahasa lain
?>