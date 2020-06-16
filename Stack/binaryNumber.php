<?php
class NumberBinary
{
    public $limit;
    public $toBinary;

    public function __construct($limit = 10)
    {
        $this->limit = $limit;
        $this->toBinary = [];
    }

    public function change($num)
    {
        $flag = $num;
        while ($flag) {
            array_unshift($this->toBinary, $flag % 2);
            $flag = floor($flag / 2);
            if ($flag == 1) {
                array_unshift($this->toBinary, 1);
                break;
            }
            if ($flag == 0) {
                break;
            }
        }
    }

    public function __toString()
    {
        $test = "";
        foreach ($this->toBinary as $value){
            $test .= $value;
        }
        return $test;
    }
}

$num1 = new NumberBinary();
$num1->change(50);
echo $num1;
