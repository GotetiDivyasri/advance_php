<?php
/*
. interface allow you to specify what methods a class should implement.
. interface could nor create object.
. All the methods must have public visibilty.
. we use the implements keyword to implement an interface in a child class.
. all the abstraction rules apply while using interfaces.
. interface is nothing but multiple inheritance.
ex: parent class 1   |
    parent class 2   | child class
    . two parent classes properties can use in single child class.
. in parent class we can declare methods and we can implement methods in interface
. in parent class we can't define properties in interface
*/
interface Animal {
    public function __construct($theme);
    public function makeSound($sound);
    public function livesPlace();
    public function sleep();
}
interface Features {
	public function type();
}
class Dog implements Animal, Features{
	protected $theme;
	public function __construct($theme){
		echo $this->theme = $theme."<br>";
	}
	public function sleep(){
		return "sleeping"."<br>";
	}
	public function type(){
		return "not a wild animal"."<br>";
	}
    protected $dog_sound = "Bow";
    public function makeSound($sound){
        return $this->dog_sound = $sound."<br>";
    }
    public function livesPlace(){
        return "Street"."<br>";
    }
}
class Cat implements Animal{
	protected $theme;
	public function __construct($theme){
		echo $this->theme = $theme . "<br>";
	}
	public function sleep(){
		return "sleeping"."<br>";
	}
	public function type(){
		return "not a wild animal"."<br>";
	}
    protected $sound = "Meow";
    public function makeSound($sound){
        return $sound."<br>";
    }
    public function livesPlace(){
        return "Street"."<br>";
    }

}
$obj1 = new Dog('animals');
echo $obj1->sleep();
echo $obj1->type();
echo $obj1->makeSound('Boww');
echo $obj1->livesPlace();

$obj2 = new Cat('animal');
echo $obj2->sleep();
echo $obj1->type();
echo $obj2->makeSound('Meoww');
echo $obj2->livesPlace();
?>
