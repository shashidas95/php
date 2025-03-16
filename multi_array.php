<?php

$multiArray = [["name" => "shashi", "age" => 35], ["name" => "robi", "age" => 20]];

// foreach ($multiArray as $key => $innerArray) {
//  foreach ($innerArray as $key => $element) {
//   echo $key . '   ' .  $element . '</br>';
//  }
// }
foreach ($multiArray as  $innerArray) {
 echo $innerArray['name'] . ' </br>';
}


$str = "php, js, go";

$array = explode(',', $str, 2);
print_r($array);

$arr = ["php", "js", "go"];
$strr = implode(',', $arr);
print_r($strr);

$url = "https://example.com/category/product.php";
$domain = preg_split('/\//', $url, -1, PREG_SPLIT_NO_EMPTY);
print_r($domain);
echo (10+5)*5;