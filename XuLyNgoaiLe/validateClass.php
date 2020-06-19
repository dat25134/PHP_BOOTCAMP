<?php

function validateClass($class){
    $pattern = "/^[CAP][0-9]{4}+[GHIKLM]$/";
    if (preg_match($pattern,$class)){
        echo "Ma lop hoc hop le";
    }else {
        echo "Ma lop khong hop le";
    }
}

$class1 ="C0318G";

validateClass($class1);
validateClass("M0318G");