<?php
echo "------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate the concept of class and object in PHP.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "------------------------------------------------------------------------<br>";

class student {
	public $name;
	public $age;
	
	Function Setdata ($n , $a){
		$this -> name = $n;
		$this -> age = $a;
	}
	
	Function display(){
		echo "name :" .$this -> name."<br>";
		echo "age:" .$this -> age."<br>";
		}
}

	$strl = new student();
	$strl -> Setdata ("Champ",18);
	$strl -> display();
	
?>