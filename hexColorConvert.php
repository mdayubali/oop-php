<?php
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode =''){
        $this->color = ltrim($colorCode,'#');
        $this->praseColor();
    }
    public function getColor($colorCode){
        $this->color = ltrim($colorCode, '#');
        $this->praseColor();
    }
    public function getRBGColor(){
        return array($this->red, $this->green, $this->blue);
    }
    public function readRGBColor(){
        echo "Red = {$this->red}\nGreen={$this->green}\nBlue={$this->blue}";
    }
    public function setColor($colorCode){
        $this->color = ltrim($colorCode, '#');
        $this->praseColor();
    }
    private function praseColor(){
        if($this->color){
            list($this->red,$this->green,$this->blue) = sscanf($this->color, "%02x%02x%02x" );
        }else{
            list($this->red,$this->green,$this->blue) = array(0,0,0);
        }
    }
    public function getRed(){
        return $this->red;
    }
    public function getGreen(){
        return $this->green;
    }
    public function getBlue(){
        return $this->blue;
    }
}

$myColor = new RGB("#ff00ee");
$myColor->readRGBColor();