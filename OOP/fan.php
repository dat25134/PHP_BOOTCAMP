<?php
define("SLOW",1);
define("MEDIUM",2);
define("FAST",3);
 class Fan{
    private $speed = SLOW;
    private $on = false;
    private $radius = 5;
    private $color  = "blue";

    public function getSpeed(){
        return $this->speed;
    }

    public function setSpeed($speed){
        $this->speed = $speed;
    }
    
    public function getOn(){
        return $this->on;
    }

    public function setOn(){
        $this->on = !$this->on;
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

    public function __toString(){
        if ($this->on) {
            return "Speed : " . $this->speed . " Status : On  Radius: " . $this->radius . " Color: " . $this->color; 
        }else {
            return "Quạt chưa được bật";
        }
    }   
 }
 $fan1 = new Fan();
 $fan1->setSpeed(FAST);
 $fan1->setRadius(10);
 $fan1->setColor("yellow");
 echo $fan1->__toString();
 $fan1->setOn();
 echo "<br>" . $fan1;
 $fan2 = new Fan();
 echo "<br>" . $fan2;
?>