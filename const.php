<?php
class ConstDefine{
    // class constants property can be use without object. Just use className with :: operator and the constant name;
    const PI = 3.1416;
    function useConstProp(){
        // You can use class constants property under the method using self wiht scope resolation oparator (::) instead of $this with -> object operator 
        return self::PI;
    }

}
// You can access only the class constans property using ClassName with scope resulation oparetor(::) without object but to access the method need to create object of the class
echo ConstDefine::PI . "<br>";
$obj = new ConstDefine;

echo $obj->useConstProp();