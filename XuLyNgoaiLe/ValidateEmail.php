<?php
function validateEmail($email){
    $pattern = "/^\w+\w*@\w+(\.\w+)$/";
    // $chuan = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
    if (preg_match($pattern, $email)) {
        echo("Email hop le");
    } else {
        echo("Email khong hop le");
    }
}

$email1="a@gmail.com";
$email2="ab@yahoo.com";
$email3="abc@hotmail.com";

$email4="_@gmail.com";
$email5="ab@gmail.";
$email6="@#abc@gmail.com";

validateEmail($email4);