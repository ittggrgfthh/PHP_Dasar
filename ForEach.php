<?php

//tanpa foreach
$names = ["Farhan", "Taqi", "Abdussalam"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]\n";
}

//dengan foreach
foreach ($names as $name){
    echo "Data $name\n";
}
//lebih simpel, bukan? jika membutuhkan index tinggal tambahkan $index => $name setelah as

//bagaimana dengan array mapping?
$person = [
    "firstName" => "Farhan",
    "middleName" => "Taqi",
    "lastName" => "Abdussalam"
];

foreach($person as $key => $value){
    echo "$key : $value\n";
}
?>