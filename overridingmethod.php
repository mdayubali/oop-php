<?php
//  To method override use the same method name at the clild class
class Animal{
    function animalName(){
        echo "The Animal Name is Cow \n";
    }
}
class Dog extends Animal{
    function animalName(){
        echo "Dog is override the parent method animalName \n" .parent::animalName() . " " ;
    }
}

$objc = new Dog();
$objc ->animalName();
$objp = new Animal();
$objp->animalName();
