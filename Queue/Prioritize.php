<?php
class Patient{
    public $name;
    public $code;

    public function __construct($name,$code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    public function content(){
        return $this->name. "ID: ". $this->code;
    }
}
class ManagerPatient {
    public $list;
    public $limit;

    public function __construct($limit = 10)
    {
        $this->list = [];
        $this->limit = $limit;
    }

    public function push($name, $code){
        $patient = new Patient($name,$code);
        if (count($this->list)<$this->limit){
            array_push($this->list, $patient);
        }else{
            echo "Stack is full!";
        }
    }

    public function isEmpty() {
        return empty($this->list);
    }

    public function pop(){
        $arr = $this->list;
        for ($j=0;$j<count($arr)-2;$j++){
            for ($i = 0;$i<count($arr)-1;$i++){
                if (($arr[$i]->code)>$arr[$i+1]->code){
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$i+1];
                    $arr[$i+1]= $tmp;
                }
            }
        }
        if ($this->isEmpty()) {
	      echo 'Stack is empty!';
	  } else {
            $this->list = $arr;
            return array_shift($this->list);
        }
    }

    public function top() {
        return current($this->list);
    }

    public function __toString()
    {
        $arr = "<br>Danh sách bệnh nhân </br>";
        for ($i=0;$i<count($this->list);$i++){
            $arr .= $this->list[$i]->name. " ID : " . $this->list[$i]->code . "</br>";
        }
        return $arr;
    }
}

$quanLyBenhNhan = new ManagerPatient();
$quanLyBenhNhan->push("Smith",5);
$quanLyBenhNhan->push("Jones",4);
$quanLyBenhNhan->push("Fehrenbach",6);
$quanLyBenhNhan->push("Brown",1);
$quanLyBenhNhan->push("Ingram",1);
echo $quanLyBenhNhan;
echo "Bệnh nhân đang được khám " .$quanLyBenhNhan->pop()->name. "<br>";
echo "Bệnh nhân đang được khám ".$quanLyBenhNhan->pop()->name . "<br>";
echo $quanLyBenhNhan;

