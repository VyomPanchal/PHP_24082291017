<?php
echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate decision making in PHP using if–else and switch–case statements.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "------------------------------------------------------------------------<br>";
 
$day = "Monday";

if($day == "Monday")
{
    echo "IF-ELSE: Today is Monday <br>";
}
else
{
    echo "IF-ELSE: Today is not Monday <br>";
}

switch($day)
{
    case "Monday":
        echo "SWITCH: Start of the week <br>";
        break;

    case "Friday":
        echo "SWITCH: Weekend is coming <br>";
        break;

    case "Sunday":
        echo "SWITCH: Today is Sunday <br>";
        break;

    default:
        echo "SWITCH: Normal working day <br>";
}

?>