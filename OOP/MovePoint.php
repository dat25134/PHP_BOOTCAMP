<?php
class Point {
    protected $x;
    protected $y;

    public function __construct($x,$y)
    {
        $this->x = $x;
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

class MovablePoint extends Point{
    protected $xspeed;
    protected $yspeed;

    public function __construct($x=0,$y=0,$xspeed=0,$yspeed=0)
    {
        parent::__construct($x,$y);
        $this->xspeed = $xspeed;
        $this->yspeed = $yspeed;
    }

    public function getXSpeed(){
        return $this->xspeed;
    }

    public function setXSpeed($xspeed){
        $this->xspeed = $xspeed;
    }

    public function getYSpeed(){
        return $this->yspeed;
    }

    public function setYSpeed($yspeed){
        $this->yspeed = $yspeed;
    }

    public function setSpeed($xspeed,$yspeed){
        $this->xspeed = $xspeed;
        $this->yspeed = $yspeed;

    }

    public function getSpeed(){
        return array(
            "xspeed"=>$this->xspeed,
            "yspeed"=>$this->yspeed
        );
    }

     public function __toString(){
        return "($this->x,$this->y) speed($this->xspeed,$this->yspeed)";
    }

    public function move(){
        $this->x+=$this->xspeed;
        $this->y+=$this->yspeed;
        return $this;
    }
}

$point1 = new MovablePoint(100,50,7,40);
print_r($point1);
$point1->move();
print_r($point1);
?>