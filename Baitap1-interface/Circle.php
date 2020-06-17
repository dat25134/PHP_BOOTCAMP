<?php
include_once "Shape.php";
include_once "Resize.php";

class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        parent::__construct($name);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function perimeter(){
        return $this->radius*2*pi();
    }
    public function Area(){
        return pow($this->radius,2)*pi();
    }
    public function show(){
        echo $this->name . $this->radius . $this->perimeter() . $this->Area();
    }

    public function resize(){
        $double =rand(1,100);
        echo "$double percent";
        $this->setRadius($this->getRadius()*$double/100);
    }
}
?>