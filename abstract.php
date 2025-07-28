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
    // Abstract method (no implementation)
    abstract protected function makeSound();

    // Concrete method
    public function sleep() {
        return "Sleeping...";
    }
}

class Dog extends Animal {
    // Implementing the abstract method
    protected function makeSound() {
        return "Bark!";
    }
}

class Cat extends Animal {
    // Implementing the abstract method
    protected function makeSound() {
        return "Meow!";
    }
}

// Usage
$dog = new Dog();
echo $dog->makeSound(); // Outputs: Bark!
echo $dog->sleep();     // Outputs: Sleeping...

$cat = new Cat();
echo $cat->makeSound(); // Outputs: Meow!
echo $cat->sleep();     // Outputs: Sleeping...

?>
