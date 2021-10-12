<?php

$data = [
    //"action" => "create"
];
/*
if (isset($data["action"])){
    $action = $data["action"];
}
else {
    $action = "nothing";
}
echo $action . "\n";
*/
//bisa kita persingkat menggunakan null coalescing operator (??)
$action = $data["action"] ?? "nothing";
echo $action . "\n";
?>