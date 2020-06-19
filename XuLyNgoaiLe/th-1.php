<?php
function isFirstLetterUpperCase($str)
{
        $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("String's first character is uppercase");
    } else {
        echo("String's first character is not uppercase");
    }
}
isFirstLetterUpperCase('Codegym');
isFirstLetterUpperCase('cdegym');
$string1="Nguyen van Nam";

$string2="NGUYEN VAN NAM";

$string3="nguyen van Nam";
isFirstLetterUpperCase($string1);
isFirstLetterUpperCase($string2);
isFirstLetterUpperCase($string3);


?>