<?php

class MyList {
    public $size;
    public $element;

    public function __construct()
    {
        $this->size = 0;
        $this->element = array();
    }

    public function insert($index, $obj){
        for ($i=count($this->element);$i>$index;$i--){
            $this->element[$i] = $this->element[$i-1];
        }
        $this->element[$index] = $obj;
        $this->size++;
    }

    public function add($obj){
        array_push($this->element,$obj);
        $this->size++;
    }

    public function remove($index){
        array_splice($this->element,$index,1);
        $this->size--;
    }

    public function get($index){
        return $this->element[$index];
    }

    public function clear(){
        $this->element = [];
        $this->size=0;
    }

    public function addAll($arr){
        $this->size += count($arr);
        array_merge($this->element,$arr);
        return $this->element;
    }

    public function indexOf($obj){
        foreach ($this->element as $index=>$value){
            if ($obj == $value){
                return $index;
            }
        }
    }

    public function isEmpty(){
        if ($this->element == null){
            return true;
        }else return false;

    }

    public function sort(){
        asort($this->element);
    }

    public function reset(){
        $this->size =1;
        array_splice($this->element,1,count($this->element)-1);
    }

    public function size(){
        return $this->size;
    }
}

// $ListC04H120 = new MyList();
// $ListC04H120->add("Lê Thạnh");
// $ListC04H120->add("Trần Đạt");
// $ListC04H120->add("Lân Hoàng");
// $ListC04H120->add("Thành Lê");
// $ListC04H120->insert(3,"Cu Đức");
// $ListC04H120->remove(3);
// echo $ListC04H120->get(2);
// $ListC04H120->sort();
// echo $ListC04H120->size();
