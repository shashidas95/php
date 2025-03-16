<?php
printf("Enter your operator (*, +, -, /):  ");
$operator = readline();
printf("Enter first numbers: ");
$n1 = (float)readline();
printf("Enter second numbers: ");
$n2 = (float)readline();
switch ($operator) {
  case '*':
    $result = $n1 * $n2;
    break;
  case '+':
    $result = $n1 + $n2;
    break;
  case '-':
    $result = $n1 - $n2;
    break;
  case '/':
    $result = ($n2 != 0) ? ($n1 / $n2) : "Error: Division by zero!";
    break;

  default:
    echo "operator invalid";
    break;
}
printf("Result: %s\n", $result);
