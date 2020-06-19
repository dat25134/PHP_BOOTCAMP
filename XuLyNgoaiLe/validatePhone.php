<?php
function validatePhone($phone){
    $pattern = "/^\([0-9]{2}\)-\(0[0-9]{9}\)$/";
    if (preg_match($pattern, $phone)) {
        echo("Phone hop le");
    } else {
        echo("Phone khong hop le");
    }
}

validatePhone("(84)-(0978489648)");
validatePhone("(18)-(a222222222)");