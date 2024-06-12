<?php
// static properties and method
// static properties and method can be access without class object from anywhere ( like as class contstants )

class StaticTest{
    // static properties declare
    static $test = "Testing static properties";
    // static method
    static function myFunction(){
        return self::$test;
    }

}
echo StaticTest::myFunction();
// echo StaticTest::$test;
