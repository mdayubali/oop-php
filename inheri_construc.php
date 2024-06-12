<?php 
class Father {
    public function __construct() {
        echo "This is from parent";
    }

}
class Child extends Father {
    public function __construct() {
        // get the parent class properties and method using parent::__construct() 
        parent::__construct();
        echo "This is from Child";
    }
}
$obj = new Child;