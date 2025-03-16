<?php

printf("Enter a integer:   ");
$n = (int) readline();

$term1 = 0;
$term2 = 1;
$nextTerm = $term1 + $term2;
printf("Fibonachchi series: %d, %d,  ", $term1, $term2);

for ($i = 3; $i <= $n; $i++) {
 printf(" %d, ", $nextTerm);
 $term1 = $term2;
 $term2 = $nextTerm;
 $nextTerm = $term1 + $term2;
}
