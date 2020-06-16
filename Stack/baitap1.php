<?php
class MyStack{
    public $stack;
    public $limit;

    public function __construct($limit = 20)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($obj){
        if (count($this->stack)<$this->limit){
            array_unshift($this->stack, $obj);
        }else{
            echo "Stack is full!";
        }
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    public function pop(){
        if ($this->isEmpty()) {
	      echo 'Stack is empty!';
	  } else {
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    


}

$C04 = new MyStack();
$C04->push("Đạt");
$C04->push("Thạnh");
$C04->push("Thành");
$C04->push("Lân");
$C04->push("Đức");
echo "Lấy ra phần tử" . $C04->pop();
echo "Lấy ra phần tử" . $C04->pop();
echo "Lấy ra phần tử" . $C04->pop();
$C04->push("Thanh");
$C04->push("Bình");
$C04->isEmpty();
echo "Lấy ra phần tử" . $C04->pop();
echo "Lấy ra phần tử" . $C04->pop();
echo "Lấy ra phần tử" . $C04->pop();
echo "Lấy ra phần tử" . $C04->pop();
$C04->isEmpty();


