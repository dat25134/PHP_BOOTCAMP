<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đoán số</title>
</head>
<body>
    <form action="GuessNum.php" method="POST">
    <h2>Hãy suy nghĩ một số từ 1 đến 100</h2>
    <input type="submit" value="Chơi" name="submit">
    <input type="text" name="suggest" style="display:none;">
    </form>
</body>
</html>
<?php
function searchNum($arr,$num){
    $mid = count($arr);
    $first = 0;
    $last = count($arr)-1;
    $check = false;
    while ($first<=$last){
        $mid = floor(($first+$last)/2);
        if ($arr[$mid]==$num) {$check = true;break;}
        if ($arr[$mid]>$num) {$last = $mid-1;} 
        if ($arr[$mid]<$num) {$first = $mid+1;}
    }
    if ($check) {
        return "Tồn tại số $num trong mảng tại vị trí index: ".$mid;

    }else return "Không tồn tại $num trong mảng";
}

$listNum = [];
for ($i=1;$i<101;$i++){
    array_push($listNum,$i);
}

echo searchNum($listNum,60);