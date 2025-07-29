<?php
/*
. A constant is an identifier for a simple value.
. As the name suggets, that value cannot change during the execution of the script.
. constants are case-sensitive.
. By convention, constant identifier are always uppercase.
. The const keyword is used to declare a class constant.
. syntax: const DEMO_CONST = "value";
. constants does not have a visibility modifiers.
. syntax: define(name, value, case-insensitive);
  name is the name of the constant.
  value is thevalue of the constant.
  case-sensitive is either true or false, by default it is false.
*/

 define('NAME', 'divya');
 const DESIGNATION ='php developer';
 //echo NAME;
 //echo ' is a ' . DESIGNATION;

 /* MAGIC CONSTANTS
1. __LINE__ constant
. it returns current line number.
2. __FILE__ constant
. it retuns the current file name with path.
3. __FUNCTION__ constant
. it retuns the current function name.
4. __CLASS__ constant
. it returns the current class name.
5. __METHOD__ constant
. it returns the current method name.
 */

echo "1. __LINE__ constant <br>";
echo "current line number is " . __LINE__;
echo "<hr>";
echo "2. __FILE__ constant <br>";
echo "current file is " . __FILE__;
echo "<hr>";
class demoClass {
	function divya(){
		echo "3. __FUNCTION__ constant <br>";
		echo "current function is " . __FUNCTION__;
		echo "<hr>";
   }
   function class_constant(){
		echo "3. __CLASS__ constant <br>";
		echo "current class is " . __CLASS__;
		echo "<hr>";
   }
   function method_constant(){
		echo "3. __METHOD__ constant <br>";
		echo "current method is " . __METHOD__;
		echo "<hr>";
   }	
}

$obj = new demoClass();
echo $obj->divya();
echo $obj->class_constant();
echo $obj->method_constant();

?>
