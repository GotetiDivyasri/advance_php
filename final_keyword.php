<?php
/* 
. the final keyword prevents child classes from overriding a method by prefixing the definition with final.
. if the class itself is being defined final then it cannot be extended.
Ex: in inheritance if we dont want a method to call any furthur then we can use final keyword.
. final class is unique and non-extendable like the normal classes.
. php final class concept will prevent inheritance functionality and also encourages the composition.
Note : composition means not using inheritance but using parent class methods.
. the final class or method will prevent the class or method from overriding the child classes or methods.
*/
// final class A{
class A{
    final public function maths($a,$b){
        echo "Addition is : " .$a+$b;
    }
}
class B extends A{
    public function maths_multi($a,$b){
        echo "Multiplication is : " . $a*$b;
    }
}
$obj = new B();
$obj->maths(2,3);


//composition
class A1{
    final public function maths($a,$b){
        echo "Addition is : " .$a+$b;
    }
}
class B1{
    private $a;
    function __construct($a){
        $this->a = $a;
        $this->a->maths(20,30);
    }

    public function maths_multi($a,$b){
        echo "Multiplication is : " . $a*$b;
    }
}
$obj = new B1(new A1);

?>