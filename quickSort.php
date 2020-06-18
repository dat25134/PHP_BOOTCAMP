<?php
function quickSort($arr)
{
    if(count($arr) <= 1){
        return $arr;
    }
    else{
        $pivot = $arr[0];
        $left = array();
        $right = array();
        for($i = 1; $i < count($arr); $i++)
        {
            if($arr[$i] < $pivot){
                array_push($left,$arr[$i]);
            }
            else{
                array_push($right,$arr[$i]);
            }
        }
        return array_merge(quickSort($left), array($pivot), quickSort($right));
    }
}

$array = [];
for ($i=0;$i<10;$i++){
    $array[] = rand(1,100);
}
print_r($array);
print_r(quickSort($array));
