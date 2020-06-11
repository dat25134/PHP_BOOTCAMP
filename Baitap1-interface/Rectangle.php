<?php
class Rectangle
{
    public $width;
    public $height;
    public $name;

    public function __construct($name, $width,$height)
    {
        $this->width = $width;
        $this->height = $height;
        $this->name = $name;
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
}

?>