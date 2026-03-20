<?php

echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate polymorphism using method overriding in PHP.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no:<br>";
echo "------------------------------------------------------------------------<br>";

class Shape{
    public function area(){
        echo "Area of shape <br>";
    }
}

class Rectangle extends Shape{
    public function area(){
        echo "Area of Rectangle : " . (10*5) . "<br>";
    }
}

class Circle extends Shape{
    public function area(){
        echo "Area of Circle : " . (3.14*5*5) . "<br>";
    }
}

$shape = array(new Shape(), new Rectangle(), new Circle());

foreach ($shape as $s){
    $s->area();
}

?>