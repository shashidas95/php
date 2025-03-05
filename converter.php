<?php

//°F = (°C × (9/5)) + 32


define("FACTOR", 9/5);
define("OFFSET", 32);


echo "temperature value :  ";
$temp = (float)readline();

echo "convert to (1: C, 2: F)  ";

$choice = (float) readline();

switch ($choice) {
 case 1:
  $result = $temp * FACTOR + OFFSET;
  echo $result;
  break;
 case 2:
  $result = ($temp  - OFFSET) / FACTOR;
  echo $result;
  break;
 default:
  $result = "invalid choice";
  break;
}
