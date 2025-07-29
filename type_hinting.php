<?php
/*
. it is also known as type declaration.
. type declarations can be added to function arguments, return values and class properties.
. they ensure that the value is of the specified type at call time, otherwise a type error is thrown. 
*/
function sum(int $a,int $b){
    return $a+$b; 
}
function array_fun(array $values){
    foreach($values as $arr){
        echo $arr.'<br>';
    }
}
class test{
    function hello(){
        echo "Welcome to Learnvern";
    }
}
function call_hello(test $test){
    $test->hello();
}
call_hello(new test);
// echo sum(5,5);
// echo array_fun([2,5,8,18]);
?>