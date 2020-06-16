<?php
class Node
{
    /* Node data */
    public $data;

    /* Link to next node */
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}

class Queue {
    public $front;
    public $back;
    public $count;

    public function __construct()
    {
        $this->front = null;
        $this->back = null;
    }

    public function isEmpty(){
        return empty($this->count);
    }

    public function enqueue($obj){
        $link = new Node($obj);
        if ($this->isEmpty()){
            $link->next = $this->front;
            $this->front = $link;
            if ($this->back == null){
                $this->back = $link;
            }
            $this->count++;
        }else{
            $this->back->next = $link;
            $link->next = null;
            $this->back = $link;
            $this->count++;
        }
    }

    public function dequeue(){
        $flag = $this->front;
        $this->front = $this->front->next;
        $this->count--;
        return $flag;
    }
 }

$myQueue = new Queue();
$myQueue->enqueue("Thạnh Em");
$myQueue->enqueue("Đức Em");
$myQueue->enqueue("Lân Em");
$myQueue->dequeue();
$myQueue->dequeue();
if ($myQueue->isEmpty()){echo "Rỗng";}else{echo "Không Rỗng";}
$myQueue->enqueue("Hiệp Anh");
$myQueue->enqueue("Thành Anh");
$myQueue->dequeue();
$myQueue->dequeue();
$myQueue->dequeue();
if ($myQueue->isEmpty()){echo "Rỗng";}else{echo "Không Rỗng";}
