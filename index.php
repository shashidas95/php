<?php



$numbers = [1, 2, 3];

$result = array_map(function ($n) {

 return $n * 2;
}, $numbers);

echo '[' . implode(', ', $result) . ']';



$arr = [

 ["id" => 1, "name" => "Alice"],

 ["id" => 2, "name" => "Bob"]

];

echo $arr[1]["name"];

?>


