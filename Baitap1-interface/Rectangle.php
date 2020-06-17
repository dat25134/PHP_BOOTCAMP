<?php
include_once "Resize.php";
include_once "Shape.php";
class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width,$height)
    {
        $this->width = $width;
        $this->height = $height;
        parent::__construct($name);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function perimeter(){
        return ($this->width + $this->height)*2;
    }
    public function Area(){
        return $this->width*$this->height;
    }
    public function show(){
        echo $this->name . $this->width . $this->height . $this->perimeter() . $this->Area();
    }

    public function resize(){
        $double =rand(1,100);
        echo "$double percent";
        $this->setWidth($this->getWidth()*$double/100);
        $this->setHeight($this->getHeight()*$double/100);
    }
}

?>