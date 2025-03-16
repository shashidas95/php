<?php 

printf("Enter first Number: ");
$first_number = (float)readline();
printf("Enter second Number: ");
$second_number = (float)readline();

$temp =$first_number;
$first_number = $second_number;
$second_number = $temp;


printf("first Number:$first_number ");
printf("second Number: $second_number");