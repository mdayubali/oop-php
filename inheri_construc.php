<?php 
class Father {
    public function __construct() {
        echo "This is from parent";
    }

}
class Child extends Father {
    public function __construct() {
        parent::__construct();
        echo "This is from Child";
    }
}
$obj = new Child;