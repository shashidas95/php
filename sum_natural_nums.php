<?php

printf("Enter a natural number:  ");
$naturalNumber = readline();
$sum = 0;

for ($i = 1; $i <= $naturalNumber; $i++) {
 $sum += $i;
}
printf("$sum, is the sum of all natural numbers upto, $naturalNumber");
