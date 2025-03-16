<?php
printf("Enter your number to find multiplication table: ");
$number = (int)readline();

for ($i = 0; $i <= $number; $i++) {
 printf("%d * %d = %d \n", $number, $i, $number * $i);
}
