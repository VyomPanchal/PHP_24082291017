<?php
echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate inheritance and method overriding in PHP.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "------------------------------------------------------------------------<br>";

class Animal {
    public function sound() {
        echo "Animal makes a sound <br>";
    }
}

class Dog extends Animal {
    public function sound() {   
        echo "Dog barks <br>";
    }
}

$animal = new Animal();
$animal -> sound();

$dog = new Dog();
$dog -> sound();

?>