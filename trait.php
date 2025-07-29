<?php
/*
. php implements a way to reuse code called traits.
. A trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies.
. A trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way.
. It is not possible to instantiate a trait on its own.
1. Reduces code duplication. 
2. Used to declare methods that can be used in multiple classes.
3. cannot be instantiated.
4. methods can be in any visibility
5.can have methods and abstract methods.
*/

trait demoTrait {
	private function demoFunction(){
		return "This is demo function 1 in demo trait";
	}
}
trait demoTrait2 {
	protected function demoFunction2(){
		return "This is another demo function in trait 2";
	}
}
class democlass {
	use demoTrait,demoTrait2;
}
class childclass extends democlass{
	function getData() {
		echo $this->demoFunction2();
	}
}
$obj = new childclass;
echo $obj->getData();
?>
