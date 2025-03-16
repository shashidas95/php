<?php

printf("enter a letter:  ");
$letter = strtolower(readline());

if ($letter == "a" || $letter == "e" || $letter == "i" || $letter == "o" || $letter == "u") {
 printf("$letter, is vowel");
} else {
 printf("$letter, is consonant");
}
