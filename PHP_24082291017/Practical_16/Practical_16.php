<?php

echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate encapsulation using private data members and public getter and setter methods.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "------------------------------------------------------------------------<br>";

class Student {
    private $name;
    private $age;

    public function setName($n) {
        $this->name = $n;
    }

    public function setAge($a) {
        $this->age = $a;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$obj = new Student();
$obj->setName("Vyom");
$obj->setAge(20);

echo "Name: " . $obj->getName() . "<br>";
echo "Age: " . $obj->getAge();

?>