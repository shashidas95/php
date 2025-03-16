<?php


printf("Enter a positive integer:  ");
$number = (int)readline();
$flag = 1; //non prime


if ($number < 2) {
 $flag = 0;
} else {
 for ($i = 2; $i <= sqrt($number); $i++) {
  if ($number % $i == 0) {
   $flag = 0;
   break;
  }
 }
}
if ($flag == 0) {
 echo "$number, is non prime";
} else {
 echo "$number, is prime";
}
