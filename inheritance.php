<?php 
/* Inheritance
 . when the child class or sub class access the properties and methods of the parent class, we will call it the concept of inheritance.
 Example: like childerns are using their parents things like phone,laptop and all the things.
 . The idea of using inheritance is about code management and code reusability.
 . We have 4 types of inheritance. 
 1. Single inheritance 
 2. multilevel inhertance 
 3. Hierarchical inheritance 
 4. multiple inheritance
 . But in php 3 types are supported single, multilevel and hierarchical , in place of multiple inheritance we have another concept is trait.
 */

 /* Single Inheritance
 . The parent class methods will be extended by the child class.
 . for single inheritance we require two classes, one is parent class and other is child class.
 . ex : parents -> child
 */

//  class ParentClass{
//     public $hobby = 'my fav hobby is singing';
//     function returnValue(){
//         echo $this->hobby;
//     }
//     function setHobbyName($hobby){
//         echo $this->hobby = $hobby;
//     }
//  }
//  class ChildClass extends ParentClass{
//     function setNewHobby($hobby){
//         echo $this->hobby = $hobby;
//     }
//  }
// $obj = new ChildClass();
// $obj->returnValue();
// $obj->setHobbyName('My fav hobby is drawing');
// $obj->setNewHobby('My fav hobby is painting');

/* Multilevel Inheritance
. we will require more than 2 classes
. In multilevel inheritance , a parent class will be inherited by a child class then that child class will be inherited by another child class.
. ex : grand father -> father -> child.
*/

// class A{
//     public function grandParent(){
//         return "I am grandparent. ";
//     }
// }
// class B extends A{
//     public function Father(){
//         return "I am father. ";
//     }
// }
// class C extends B{
//     public function Child(){
//         return "I am child.";
//     }

//     public function Relations(){
//         echo "class A : " . $this->grandParent();
//         echo "<hr> class B : " . $this->Father();
//         echo "<hr> class c : " . $this->child();
//     }
// }
// $obj = new C();
// $obj->Relations();

/* Hierarchical Inheritance
. Hierarchical inheritance is a type of inheritance in which a program consists of one parent and several subclasses.
. Ex : parent -> child 1
.             -> child 2
*/

class A{
    public function Parents(){
        return "I am parents.";
    } 
}
class B extends A{
    public function Child1(){
        return "I am child 1.";
    }

    public function ChildName(){
        echo "Class A : " . $this->Parents();
        echo "<hr> Class B : " . $this->Child1();
    }
}
class C extends A{
    public function Child2(){
        return "I am child 2.";
    }
    public function ChildName(){
        echo "Class A : " . $this->Parents();
        echo "<hr> Class C : " . $this->Child2();
    }
}   
$obj = new C();
$obj->ChildName();
$obj_1 = new B();
$obj_1->ChildName();


?>