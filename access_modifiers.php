<?php
/*
. The visibility of a property, a method or a constant can be defined by prefixing the declaration with the access modifiers.
. It allows you to control where your class members can be accessed from, for instance to prevent a certain variable to be modified from outside the class.
. We have 6 access modifiers. 
1.Public 
2.Private 
3.Protected 
4.Abstract 
5.Final 
6.Static
*/

/*
1. public - it can be accessed from everywhere.
ex : parking slots in malls we can use any parking slot.

2. private - it can only be accessed within the class.
ex : parking slots in our own house only we can use that.

3. protected - it can be accessed by the class declared it and by the classes that inherit the above declared class.
ex : parking slots in apartments can be used those who are staying in that apartment.like in parent class extends in child class , so in child class we can use protected.
*/ 

// class myClass{
// 	public $public = 'public';
// 	protected $protected = 'protected';
// 	private $private = 'private';

// 	function getValues(){
// 		echo $this->public;
// 		echo $this->private;
// 		echo $this->protected; 
// 	}
// }
// class class2 extends myClass{
// 	function getValues2(){
// 		echo $this->public;
// 		//echo $this->private;
// 		echo $this->protected; 
// 	}
// }

// $obj = new class2;
// echo $obj->getValues2();


/* access modifiers function */
class Class1{
	function __construct(){
		echo "I am a constructor <hr>";
	}

	public function PublicFunction(){
		echo "I am a public function <hr>";
	}
	private function PrivateFunction(){
		echo "I am private function <hr>";
	}
	protected function ProtectedFunction(){
		echo "I am a protected function <hr>";
	}

	public function BaseFunction(){
		$this->PublicFunction();
		$this->ProtectedFunction();
		$this->PrivateFunction();
	}
}
class Class2 extends Class1{
	public function CallingFunction(){
		$this->PublicFunction();
		$this->ProtectedFunction();
		$this->PrivateFunction();
	}
}
$obj = new Class2;
$obj->BaseFunction();exit;
$obj->CallingFunction();exit;
// $obj->PrivateFunction();
// $obj->ProtectedFunction();
?>