<?php
function validateAccount($account){
    $pattern ="/^[_a-z0-9]{6,}$/";
    if (preg_match($pattern,$account)){
        echo("Tai khoan hop le");
    }else{
        echo("Tai khoan khong hop le");
    }
}

$acc1="123abc_";
$acc2="_abc123";
$acc3="______";
$acc4="123456";
$acc5="abcdefg";

$acc5=".@";
$acc5="12345";
$acc5="1234_";
$acc5="abcde ";

validateAccount($acc1);
validateAccount($acc5);