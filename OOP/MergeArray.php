<?php
$arr1 = [1,2,3,4,5,6,7];
$arr2 = [3,4,5,6,7,8];
$arr3 = $arr1;
foreach ($arr2 as $value){
    array_push($arr3,$value);
}
print_r($arr3);
?>