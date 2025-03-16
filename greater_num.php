<?php

printf("Enter three different numbers: ");
$input = trim(fgets(STDIN));
sscanf($input, "%f %f %f", $n1, $n2, $n3);
if ($n1>= $n2 && $n1 >= $n3 ) {
 printf("$n1, is greatest number");
}
if ($n2 >= $n1 && $n2 >= $n3) {
 printf("$n2, is greatest number");
}
if ($n3 >= $n1 && $n3 >= $n2) {
 printf("$n3, is greatest number");
}
 

