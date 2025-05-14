<?php 
//  ক্লাসের কন্সটাক্টর মেথড যেটা ক্লাস থেকে অব্জেক্ট তৈরি হবার সময় নিজে থেকেই রান হয়। 
class Human{
    public $name;
    public $age;

    // ক্লাস থেকে যখন অব্জেক্ট ক্রিয়েট করা হয় অটোমেটিক এই কন্সট্রাক্ট মেথড একবার রান করে। 
    function __construct($personName, $age = 0){
        $this->name = $personName;
        $this->age = $age;
    }
    function sayHi(){
        echo "Salam \n";
    }
    function sayName(){
        echo "My Name is {$this->name}, and I'm {$this->age} years old\n";
    }
}

// $h1 = new Human();
// We can avoid extra code line using __constructor argument instead setting the value of object 
// $h1->name = "Md Ayub Ali";
$h1 = new Human("Md Ayub Ali",31);
$h1->sayName();
// echo $h1->name;