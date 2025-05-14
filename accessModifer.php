<?php
// public, private, protected
class Fund{
    public $fund;

    function __construct( $initialFudn = 0)
    {
        $this->fund = $initialFudn;
    }
    public function addFund( $money){
        $this->fund +=$money;
    }
    public function deductFund( $money){
        $this->fund -=$money;
    }
    public function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}
$ourFund = new Fund(100);
// $ourFund->fund = 150;
$ourFund->addFund(50);
$ourFund->deductFund(10);
$ourFund->getTotal();