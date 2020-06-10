<?php
define("PI",3.14);
class Circle {
    protected $radius;
    protected $color;

    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;   
    }
    
    public function getRadius(){
        return $this->radius;
    }

    public function setRadius($radius){
        $this->radius = $radius;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getArea(){
        return $this->radius**2*PI;
    }
}

class Cylinder extends Circle{
    public $height;
    
    public function __construct($radius,$color,$height)
    {
        parent::__construct($radius,$color);
        $this->height = $height;
    }

    public function getVolume(){
        return $this->getArea()*$this->height;
    }
    
}

$cyl1= new Cylinder(10,"red",5);
echo "Thể tích hình trụ " . $cyl1->getVolume();

?>