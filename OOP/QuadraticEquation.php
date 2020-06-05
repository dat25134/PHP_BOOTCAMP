<?php
class QuadraticEquation {
    private $a;
    private $b;
    private $c;
    public function __construct($a,$b,$c )
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

    }
    public function getterA(){
        return $this->a;
    }
    public function getterB(){
        return $this->b;
    }
    public function getterC(){
        return $this->c;
    }
    public function getDiscrimginant(){
        return (($this->b*$this->b)-(4*$this->a*$this->c));
    }
    public function getRoot1(){
        if ($this->getDiscrimginant()<0){
            return 0;
        }
        return ((((-$this->b)-sqrt($this->getDiscrimginant()))/(2*$this->a)));
    }
    public function getRoot2(){
        if ($this->getDiscrimginant()<0){
            return 0;
        }
        return ((((-$this->b)+sqrt($this->getDiscrimginant()))/(2*$this->a)));
    }
}
 $pt1 = new QuadraticEquation(1,3,1);
 $pt2 = new QuadraticEquation(1,2.0,1);
 $pt3 = new QuadraticEquation(1,2,3);
echo "The equation has tow roots " . $pt1->getRoot1() . " and " . $pt1->getRoot2();
?>