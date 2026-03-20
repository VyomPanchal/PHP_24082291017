<?php
echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate the use of while, do-while and foreach loops.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "------------------------------------------------------------------------<br><br>";

$i = 1;

while($i <= 5)
{
    echo "Number: $i <br>";
    $i++;
}

echo "<br>";

$j = 1;

do
{
    echo "Number: $j <br>";
    $j++;
} 
while($j <= 5);

echo "<br>";

$colors = array("Red", "Green", "Blue", "Yellow");

foreach($colors as $value)
{
    echo "Color: $value <br>";
}
?>
