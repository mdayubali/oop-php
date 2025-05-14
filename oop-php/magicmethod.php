<?php
// construct and desctruct
// When the object instation of the class then the construct megic method will be run/call automaticaly
// if want your file will start instantly while the file load then use construct

class Consdes{
    private $props; 
   function __construct($arg)
    {
        echo $this->props = $arg . "<br>";
        echo "constructor run autometically when the objec will be created " . __CLASS__ ;
    }

    function ownMethod(){
        echo "My own method $this->props ";
    }

    function __destruct()
    {
        echo "I'm destroyed at the last stage";
    }
    
}
$obj = new Consdes("HELLO World!");
$obj->ownMethod();