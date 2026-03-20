<?php
echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script using switch-case to implement a simple menu-driven or calculator system.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "------------------------------------------------------------------------<br>";

$a = 20;
$b = 10;
$c = 1;   

echo "First Number : $a <br>";
echo "Second Number : $b <br>";
echo "Choice : $c <br><br>";

switch($c)
{
    case 1:
        $result = $a + $b ;
        echo "Addition : $result";
        break;

    case 2:
        $result = $a - $b ;
        echo "Subtraction : $result";
        break;

    case 3:
        $result = $a * $b ;
        echo "Multiplication : $result";
        break;

    case 4:
        if($b != 0) {
            $result = $a / $b ;
            echo "Division : $result";
        } else {
            echo "Division by zero is not allowed.";
        }
        break;

    case 5:
        $result = $a % $b ;
        echo "Modulus : $result";
        break;

    default:
        echo "Invalid Operator";
}

?>
