<?php
class Point2D{
    protected $x;
    protected $y;

    public function __construct($x,$y)
    {
        $this->x= $x;
        $this->y = $y;
    }

    public function getX(){
        return $this->x;
    }

    public function setX($x){
        $this->x = $x;
    }

    public function getY(){
        return $this->y;
    }

    public function setY($y){
        $this->y = $y;
    }

    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY(){
        return array(
            "x"=> $this->x,
            "y"=> $this->y
        );
    }

    public function __toString()
    {
        return "($this->x,$this->y)";
    }
}

class Point3D extends Point2D{
    protected $z;
    public function __construct($x,$y,$z)
    {
        parent::__construct($x,$y);
        $this->z = $z;
    }

    public function getZ(){
        return $this->z;
    }

    public function setZ($z){
        $this->z = $z;
    }

    public function setXYZ($x,$y,$z){
        parent::setXY($x,$y);
        $this->z = $z;
    }

    public function getXYZ(){
        return array(
            "x"=> $this->x,
            "y"=> $this->y,
            "z"=> $this->z
        );
    }

    public function __toString()
    {
        return "($this->x,$this->y,$this->z)";
    }
}

$point1 = new Point2D(10.2,50);
print_r($point1->getXY());
$point2 = new Point3D(10.2,50,70);
print_r($point2->getXYZ());
?>