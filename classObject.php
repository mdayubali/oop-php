<?php
// class, object, method and property
// class name will be start with captial latter
// method camelCase

class Human{
    // property
    public $name;
    // method
    function sayHi(){
        echo "Salam \n";
        $this->sayName();
    }
    // কোন ক্লাসের প্রপ্রারটি বা মেথড কে  সেইম ক্লাসের ভিতর অন্য কোন মেথডের মধ্যে ব্যবহার করতে হলে $this->property/method() এর মাধ্যমে ব্যবহার করতে হয়। 
    function sayName(){
        echo "My Name is {$this->name} \n";
    }
}
class Cat{
    function sayHi(){
        echo "Meow \n";
    }
}
class Dog{
    function sayHi(){
        echo "Woof \n";
    }
}
// সেইম ক্লাসের বিভিন্ন নামের একাধিক অব্জেক্ট তৈরি করা যায় এবং অব্জেক্টের মাধ্যেম ঐ ক্লাসের সব প্রপারটি এবং মেথড এক্সেস করা যায়। 
$h = new Human();
$h1 = new Human();
$h1->name = "Noman Ali";
$h->name = "Ali"; // set

$h->sayHi();
$h1->sayHi();

