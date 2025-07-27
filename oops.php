<?php
// There are 4 terms of oops. 
// 1.class : 
// A class is a blueprint or template for creating objects. It defines a data structure that encapsulates data (properties) and behavior (methods) related to that data.

// 2.object : 
// An object is an instance of a class. It is created based on the class definition and can hold specific data and perform actions defined by the class.

// 3.properties : 
// Properties (also known as attributes or fields) are variables that hold data related to a class. They define the state of an object.
// Example: In the Car class, make and model are properties.

// 4.methods or functions :
// Methods are functions defined within a class that describe the behaviors or actions that an object can perform. They can manipulate the object's properties or perform operations.


// Defining a class named 'Car'
class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor method to initialize properties
    public function __construct($make, $model, $year) {
        $this->make = $make;   // Assigning the make
        $this->model = $model; // Assigning the model
        $this->year = $year;   // Assigning the year
    }

    // Method to display car information
    public function displayInfo() {
        return "Car: {$this->year} {$this->make} {$this->model}";
    }
}

// Creating an object (instance) of the Car class
$myCar = new Car("Toyota", "Corolla", 2020);

// Accessing properties
echo $myCar->make;  // Output: Toyota
echo "\n";

// Calling a method
echo $myCar->displayInfo();  // Output: Car: 2020 Toyota Corolla


// Class Definition: The Car class is defined with three properties: make, model, and year.

// Constructor: The __construct method initializes the properties when a new object is created.

// Method: The displayInfo method returns a string that includes the car's details.

// Object Creation: An object $myCar is created from the Car class, and its properties are initialized with specific values.

// Accessing Properties and Methods: The properties and methods of the object are accessed using the -> operator.

?>