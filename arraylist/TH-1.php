<?php
class ArrayList
{
    public $arrayList;
    /**
     * Constructor
     * Xây dựng một danh sách mới. Tham số $ arr là tùy chọn. Nếu đặt một ArrayList
     * với các phần tử trong mảng được tạo. Nếu không một danh sách trống được xây dựng.
     * @param arr - mảng một chiều (tùy chọn)
     **/
    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
      }
    
    public function size(){
        return count($this->arrayList);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
}


$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);
echo $listInteger->get(-1);