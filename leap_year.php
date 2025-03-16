<?php

printf("Enter a year:  ");
$year = readline();
if ($year % 400 == 0) {
 printf("$year, is a leap year");
} elseif ($year % 100 == 0) {
 printf("$year, is not a leap year");
} elseif ($year % 4 == 0) {
 printf("$year, is a leap year");
} else {
 printf("$year is not a leap year");
}
