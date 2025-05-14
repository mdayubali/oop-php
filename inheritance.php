<?php
// inheritance reduce the code duplicate
class Animal{
    protected $name;
    public function __construct($name="")
    {
        $this->name = $name;
    }
    public function eat(){
        echo "{$this->name} is eating\n";
    }
    public function run(){
        echo "{$this->name} is running\n";
    }
    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }
}
class Cat extends Animal{
    public function sayMew(){
        return $this->run();
    }
}
class Human extends Animal{
    public function sayHi(){
        echo "{$this->name} is say Hi\n";
    }
}
$animal = new Animal("cat");
$human = new Human("Sabuj");
$cat = new Cat("Cat");
$human->sayHi();
$human->run();
$cat->sayMew();
