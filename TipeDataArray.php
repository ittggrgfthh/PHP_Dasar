<?php 

$values = array(1, 2, 3.5, "a");
var_dump($values);

$nama = ["Farhan", "Taqi", "Abdussalam"];
var_dump($nama);

//mengambil data index ke-0
var_dump($nama[0]);

//mengubah data
$nama[0] = "Budi";
var_dump($nama);

//menghapus data index juga indexnya (hilang semua)
unset($nama[1]);
var_dump($nama);

//menambah data array
$nama[] = "Joni";
var_dump($nama);

//untuk menghitung jumlah array
var_dump(count($nama));

//membuat map
$farhan = array(
    "id" => "farhan",
    "nama" => "farhan taqi",
    "umur" => 19
);
var_dump($farhan);
//dengan menggunakan map kita bisa merubah indexnya, jadi tidak harus menggunakan angka

$contoh = [
    "id" => "contoh",
    "nama" => "contoh saja",
    "umur" => 20
];
var_dump($contoh);

//array di dalam array (nested array)
$farhan = array(
    "id" => "Farhan",
    "nama" => "Farhan Taqi",
    "umur" => 19,
    "alamat" => array(
        "kota" => "Semarang",
        "negara" => "indonesia"
    )
);
var_dump($farhan["alamat"]["kota"]);
//ini adalah cara mengakses nested array

$contoh = [
    "id" => "coba aja",
    "nama" => "ini percobaan",
    "umur" => 20,
    "alamat" => [
        "kota" => "Tokyo",
        "negara" => "Jepang"
    ]
];
var_dump($contoh["alamat"]["negara"]);
?>
