<?php
class ListInterger{
    public $limit;
    public $listInt;

    public function __construct($limit = 5)
    {
        $this->limit = $limit;
        $this->listInt = array();
    }

    public function push($num){
        if (count($this->listInt)<$this->limit){
            array_push($this->listInt,$num);
        }else {
            echo "Stack is Full!!!";
        }
        
    }

    public function pop(){
        return array_pop($this->listInt);
    }
}

$list = new ListInterger();
for ($i=0;$i<$list->limit;$i++){
    $list->push(rand(1,10));
}
print_r($list);
$arr = [];
$max = count($list->listInt);
for ($i=0;$i<$max;$i++){
    array_push($arr,$list->pop());
}
print_r($arr);