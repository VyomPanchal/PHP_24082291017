<?php
echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script to create associative arrays and apply sorting functions such as asort() and ksort().<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "------------------------------------------------------------------------<br><br>";

$marks = array("Vyom"=>95, "Champ"=>100, "Karm"=>99);

asort($marks);
foreach($marks as $name => $mark){
    echo "$name = $mark <br>";
}

echo "<br>";

ksort($marks);
echo "After ksort : <br>";
foreach($marks as $name => $mark){
    echo "$name = $mark <br>";
}
?>