<?php
/*
. static methods and properties can be accessed without creating an object.
. static methods can be called directly without needing an object of the class.
. in addition , $this is not available inside static method.
. static methods and properties can be considered as escaping from object-oriented programming.
. the static keyword is used to declare static methods.
. you can add access modifier before static keyword.
. syntax:
class democlass{
 public static function demostaticmethod(){
	//remaining code.
 }	
}
. static methods can be accessed from outside the class using the same class name and scope resolution operator.
ex: demoClass::demostaticmethod();
*/
class demoClass{
	public static $name = 'divya';
	public static function demoFunction(){
		echo "This is a demo function in demo class.";
	}
	public static function getData(){
		self::demoFunction();
	}
	 
}
class childClass extends demoClass{
	public function getStaticData(){
		echo demoClass::$name;
		echo "<br>";
		parent::demoFunction();
		// demoClass::demoFunction();
	}
}
$obj = new childClass();
// echo $obj->getStaticData();
echo $obj->getData();

//accessing a variable
// echo demoClass::$name;

// demoClass::demoFunction();
?>
