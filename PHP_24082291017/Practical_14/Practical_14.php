<?php

echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate multiple inheritance using traits.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "------------------------------------------------------------------------<br>";

trait TraitA {
    public function messageA() {
        echo "Message from Trait A <br>";
    }
}

trait TraitB {
    public function messageB() {
        echo "Message from Trait B <br>";
    }
}

class MyClass {
    use TraitA, TraitB;
}

$obj = new MyClass();
$obj->messageA();
$obj->messageB();

?>