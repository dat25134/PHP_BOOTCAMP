<?php
include_once "Shape.php";
interface Colorable{
    public function  howToColor();
}
class Square extends Shape implements Colorable
{
    public $side;

    public function __construct($name, $side)
    {
        $this->side = $side;
        parent::__construct($name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSide()
    {
        return $this->side;
    }

    public function setSide($side)
    {
        $this->side = $side;
    }

    public function howToColor(){
        echo "Color all four sides..";
    }
    
    public function perimeter(){
        return $this->side*4;
    }
    public function Area(){
        return $this->side*$this->side;
    }
    public function show(){
        echo $this->name . $this->side . $this->perimeter() . $this->Area();
    }
}
