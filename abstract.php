<?php
/*
. abstract class is in parent class which methods are there , those methods only we can use in child class.
. an abstract class is a class that contains at least one abstract method.
. abstract method is a function declaration without any body and it has the only name of the method and its parameters.
. abstract class could not create object.
. abstract classes have abstarct methods in it which they need their child classes to override with inheritance.
. abstract method's visibilty can either be public or protected, but not private.
. ex : when we are building a car, then we have some things for sure for every car needs to have.
*/
abstract class Animal {
    public $theme;
    public function __construct($theme){
        $this->theme = $theme;
        echo "This is ". $theme." data"."<br>";
    }
    public abstract function makeSound($sound);
    protected abstract function livesPlace();
    public function sleep(){
        return "Sleeping"."<br>";
    }
}
class Dog extends Animal{
    protected $dog_sound = "Bow";
    public function makeSound($sound){
        return $this->dog_sound = $sound."<br>";
    }
    public function livesPlace(){
        return "Street"."<br>";
    }
}
class Cat extends Animal{
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
echo $obj1->makeSound('Boww');
echo $obj1->livesPlace();

$obj2 = new Cat('animal');
echo $obj2->sleep();
echo $obj2->makeSound('Meoww');
echo $obj2->livesPlace();
?>
