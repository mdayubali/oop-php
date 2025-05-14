<?php 
class Father {
    public $name;
    public function __construct() {
        echo "This is from parent \n";
    }
    public function  ownFun($name) {
        return $this->name;
    }

}
class Child extends Father {
    public function __construct() {
        // get the parent class object and method using $this-> object operator;
        $this->name = "md ayub ali";
        $this->ownFun=$name;
        // get the parent class contruct using parent::__construct() 
        parent::__construct();
        echo "This is from Child \n";
    }
}
$obj = new Child;
echo $obj->ownFun("Habibul basar");
