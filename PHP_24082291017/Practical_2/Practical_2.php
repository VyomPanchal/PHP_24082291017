<?php
echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate the use of constants and arithmetic / logical operators in PHP.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "------------------------------------------------------------------------<br>";

define("PI", 3.14);

$a = 10;
$b = 5;

echo "Value of PI = " . PI . "<br><br>";

echo "Addition = " . ($a + $b) . "<br>";
echo "Subtraction = " . ($a - $b) . "<br>";
echo "Multiplication = " . ($a * $b) . "<br>";
echo "Division = " . ($a / $b) . "<br><br>";

echo "Logical AND = " . (($a > 5 && $b < 10) ? "True" : "False") . "<br>";
echo "Logical OR = " . (($a > 5 || $b > 10) ? "True" : "False") . "<br>";
echo "Logical NOT = " . ((!($a > 5)) ? "True" : "False") . "<br>";
?>
