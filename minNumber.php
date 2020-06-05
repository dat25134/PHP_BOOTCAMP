<?php
    $array = [1,2,3,4,5,6,7,18,9,-2];
    function minNumber ($array){
        $min = $array[0];
        foreach ($array as $key=>$value){
            if ($value<$min) {
                $min = $value;
            }
        }
        return $min;
    }
    echo " số bé nhất trong mảng đã cho là " . minNumber($array);
?>
