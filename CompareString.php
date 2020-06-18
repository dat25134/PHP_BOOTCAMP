<?php

class MyStack
{
    public $stack;
    public $limit;

    public function __construct($limit = 20)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($obj)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $obj);
        } else {
            echo "Stack is full!";
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo 'Stack is empty!';
        } else {
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }
}

class MyQueue
{
    public $stack;
    public $limit;

    public function __construct($limit = 20)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($obj)
    {
        if (count($this->stack) < $this->limit) {
            array_push($this->stack, $obj);
        } else {
            echo "Stack is full!";
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo 'Stack is empty!';
        } else {
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra chuỗi</title>
</head>
<body>
    <form action="CompareString.php" method="POST">
        <input type="text" name="string" placeholder="Input string here!!!">
        <input type="submit" name="submit" value="Compare">
    </form>
    <?php
    $myqueue = new MyQueue();
    $mystack = new MyStack();
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        if (isset($_REQUEST['string'])){
            $str = $_REQUEST['string'];
            for ($i = 0;$i<strlen($str);$i++){
                $myqueue->push($str[$i]);
                $mystack->push($str[$i]);
            }
            $check = true;
            for ($i=0;$i<strlen($str);$i++){
                if ($mystack->pop()!=$myqueue->pop()){
                    $check = false;
                }
            }
            if ($check) {
                echo "Chuỗi nhập vào là chuỗi đối xứng";
            }else{
                echo "Chuỗi nhập vào không phải là chuỗi đối xứng";
            }    
        }
    }
    
    ?>
</body>
</html>