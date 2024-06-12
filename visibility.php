<?php
// visibility controller-> public,projected, private
class OopVisibility{
    // must add before public, private or protected in the properties and methods
   public $name = "md ayub ali";
//    only accessable own class and the inside of the child class
   protected $age = 20; 
//    only accessable own clas
   private $profession = "Web Developer";
}
$obj = new OopVisibility();
echo $obj->name;
//error because its projected  
echo $obj->age; 
 //error because its projected 
echo $obj->profession;