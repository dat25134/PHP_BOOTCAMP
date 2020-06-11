<?php
include "Circle.php";
include "Rectangle.php";
include "Square.php";
interface Resizeable{
    public function resize($object);
}
class ResizeCicle implements Resizeable {
    public function resize($object){
        $double =rand(1,100);
        echo "$double percent";
        $object->setRadius($object->getRadius()*$double/100);
    }
}
class ResizeRectangle implements Resizeable {
    public function resize($object){
        $double =rand(1,100);
        echo "$double percent";
        $object->setWidth($object->getWidth()*$double/100);
        $object->setHeight($object->getHeight()*$double/100);
    }
}

class ResizeSquare implements Resizeable {
    public function resize($object){
        $double =rand(1,100);
        echo "$double percent";
        $object->setSide($object->getSide()*$double/100);
    }
}
