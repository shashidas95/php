<?php
printf("Enter your number to find a factorial of it: ");
$number = (int)readline();
$factorial = 1;
if ($number <=  0) {
 printf("Factorial is not exists of the given number, $number");
} else {
 for ($i = 1; $i <= $number; $i++) {
  $factorial *= $i;
 }
 printf("$factorial, is the factorial of $number");
}
