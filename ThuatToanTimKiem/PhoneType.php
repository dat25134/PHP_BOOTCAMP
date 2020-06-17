<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân loại số điện thoại theo nhà mạng Viettle-Vinaphone-Mobifone</title>
    <style>
        th,
        td,
        table {
            border: 1px solid;

        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <form action="PhoneType.php" method="POST">
        <textarea name="data" id="data" cols="30" rows="10"></textarea>
        <input type="submit" value="Phân loại" name='submit'>
    </form>
    <?php
    $listPhoneNum = [];
    $mobifone = [];
    $viettel = [];
    $vinaphone = [];
    $sola = [];
    $kytula = [];
    $DauSoViettel = ["086", "096", "097", "098", "032", "033", "034", "035", "036", "037", "038", "039"];
    $DauSoVinaphone = ["088", "091", "094"];
    $DauSoMobifone = ["089", "090", "093"];

    function typePhone($arr,$DauSoViettel,$DauSoVinaphone,$DauSoMobifone)
    {
        foreach ($arr as  $value) {
            if (is_numeric($value)){
                if (checkDauSo($value,$DauSoViettel)) {array_push($GLOBALS['viettel'] , $value);}
                elseif (checkDauSo($value,$DauSoVinaphone)) {array_push($GLOBALS['vinaphone'] , $value);}
                elseif (checkDauSo($value,$DauSoMobifone)) {array_push($GLOBALS['mobifone'] , $value);}
                else array_push($GLOBALS['sola'],$value);
            }else {
                array_push($GLOBALS['kytula'],$value);
            }
           
        }
    }
    function checkDauSo($value,$checkdauso)
    {   
        $check = false;
        $tmp = substr($value, 0, 3);
        foreach ($checkdauso as $value){
            if ($value == $tmp) {$check =true; break;}
        }

        return $check;
    }
    function display($arr)
    {
        $text = "";
        foreach ($arr as $value) {
            $text .= $value . ",";
        }
        return $text;
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_REQUEST['data'])) {
            $text = $_REQUEST['data'];
            $text .= ",";
            $text = str_replace(" ","",$text);
            $flag = '';
            for ($i = 0; $i < strlen($text); $i++) {
                if ($text[$i] == ",") {
                    array_push($listPhoneNum, $flag);
                    $flag = '';
                } else {
                    $flag .= $text[$i];
                }
            }
            typePhone($listPhoneNum,$DauSoViettel,$DauSoVinaphone,$DauSoMobifone);
            $table = "<table><caption>Phân Loại số</caption><tr><th>Viettel</th><th>Vinaphone</th><th>Mobiphone</th><th>Số Lạ</th><th>Ký tự lạ</th></tr>";
            $table .= "<tr><td>" . display($viettel) . "</td><td>" . display($vinaphone) . "</td><td>" . display($mobifone) . "</td><td>" . display($sola) . "</td><td>" . display($kytula) . "</td> </tr>";
            $table .= "</table>";
            echo $table;
        }
    }
    ?>
</body>

</html>