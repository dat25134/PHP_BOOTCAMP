<?php
if (session_id()==""){
    session_start();
}
    
if (isset($_SESSION['array'])) {
    $arr = $_SESSION['array'];
} else {
    $arr = [];
}
function MinInArr($arr)
{
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($min > $value) {
            $min = $value;
        }
    }
    return $min;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            font-size: 150%;
            border-radius: 20px;
        }
        .btn{
            width: 100px;
            height: 50px;
            background-color: green;
            color: white;
            text-transform: uppercase;
            font-size: 100%;
        }

    </style>
</head>
<form action="MinArray.php" method="POST">
    <input type="text" name="num" placeholder="Input Number to add Array">
    <input type="submit" value="add" name="submit" class="btn">
    <input type="submit" value="findMin" name="submit" class="btn">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_REQUEST['num'])) {
        if ($_REQUEST['submit'] == "add"){
            $num =  $_REQUEST['num'];
            array_push($arr,$num);
            $_SESSION['array'] = $arr;
            echo "Mảng arr: = [";
            foreach ($arr as $value){
                echo $value.", ";
            }
            echo "] <br>";
        }
        if ($_REQUEST['submit'] == "findMin"){
            echo "Mảng arr: = [";
            foreach ($arr as $value){
                echo $value.", ";
            }
            echo "]<br>";
            echo "Số bé nhất trong mảng: ".MinInArr($arr);
        }
    }
}
?>

<body>

</body>

</html>
