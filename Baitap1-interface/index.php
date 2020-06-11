<?php
include "Resize.php";

$cir1 = new Circle("Circle 1" , 50);
echo $cir1->getRadius();
$cir1Resize = new ResizeCicle();
$cir1Resize->resize($cir1);
echo $cir1->getRadius();

$rect1 = new Rectangle("Rectangle 1" , 50, 25);
echo "Chiều dài" . $rect1->getWidth();
echo "Chiều rộng" . $rect1->getHeight();
$rect1Resize = new ResizeRectangle();
$rect1Resize->resize($rect1);
echo "Chiều dài" . $rect1->getWidth();
echo "Chiều rộng" . $rect1->getHeight();

$square1 = new Square("Square 1" , 50);
echo $square1->getSide();
$square1Resize = new ResizeSquare();
$square1Resize->resize($square1);
echo $square1->getSide();