<?php
interface Colorable{
    public function  howToColor();
}
class Square implements Colorable
{
    public $side;
    public $name;

    public function __construct($name, $side)
    {
        $this->side = $side;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSide()
    {
        return $this->side;
    }

    public function setSide($side)
    {
        $this->side = $side;
    }

    public function howToColor(){
        echo "Color all four sides..";
    }
}
