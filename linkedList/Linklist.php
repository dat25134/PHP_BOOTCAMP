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

class LinkList {
    public $count;
    public $firstNode;
    public $lastNode;

    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function add($index,$data){
        $arr = array();
        $value = $this->firstNode;
        $link = new Node($data);
        while ($value!=null){
            array_push($arr,$value);
            $value = $value->next;
        }

        foreach ($arr as $key=>$current){
            if ($index == $key){
                $arr[$key-1]->next = $link;
                $link->next = $current;
                $current = $link;
            }
        }
        $this->count++;
    }

    public function addFirst($data){
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode == null){
            $this->lastNode = $link;
        }
        $this->count++;

    }

    public function addLast($data){
        if ($this->firstNode!=null){
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        }else {
            $this->addFirst($data);
        }    
    }

    public function removeIndex($index){
        $arr=[];
        $value = $this->firstNode;
        while ($value!=null){
            array_push($arr,$value);
            $value = $value->next;
        }
        
        for ($i=0;$i<count($arr)-1;$i++){
            if ($i==$index){
                $arr[$i-1]->next=$arr[$i+1];
            }
        }
        $this->count--;

    }

    public function removeObj($obj){
        $arr=[];
        $value = $this->firstNode;
        while ($value!=null){
            array_push($arr,$value);
            $value = $value->next;
        }

        foreach ($arr as $key=>$current){
            if ($obj == $current){
                $arr[$key-1]->next = $arr[$key+1];
            }
        }

    }

    public function get($index){
        $arr=[];
        $value = $this->firstNode;
        while ($value!=null){
            array_push($arr,$value);
            $value = $value->next;
        }

        foreach ($arr as $key=>$current){
            if ($key == $index){
                return $current->readNode();
            }
        }
    }

    public function size(){
        return $this->count;
    }

    public function printList(){
        $value = $this->firstNode;
        while ($value!=null){
            echo $value->readNode();
            $value = $value->next;
        }
    }

    public function indexOf($obj){
        $arr=[];
        $value = $this->firstNode;
        while ($value!=null){
            array_push($arr,$value);
            $value = $value->next;
        }

        foreach ($arr as $key=>$current){
            if ($obj == $current->readNode()){
                return $key;
            }
        }
    }

    public function contains($obj){
        $value = $this->firstNode;
        while ($value!=null){
            if ($obj==$value->readNode()){
                return true;
            }
            $value = $value->next;
        }
        return false;
    }
}


$listC04 = new LinkList();
$listC04->addFirst("Trần Đạt");
$listC04->addFirst("Đức");
$listC04->addFirst("Thành");
$listC04->addFirst("Lân");
$listC04->add(2,"Hiệp");
$listC04->addLast("Thắng");
$listC04->removeIndex(3);
$listC04->printList();
echo $listC04->size();
echo $listC04->indexOf("Lân");
