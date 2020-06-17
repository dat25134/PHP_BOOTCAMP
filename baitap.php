<!-- tạo một mảng gồm 20 phần tử rand 1-10, kiểm tra xem 5 có trong mảng k, nếu có chỉ ra index, không có thì báo 5 ko tồn tại trong mảng -->
<?php

// $listInt = [];

// for ($i = 0; $i < 100; $i++) {
//     array_push($listInt, rand(0, 10));
// }


// // function checkIntToIndex($arr, $numcheck)
// // {
// //     $index = -1;
// //     foreach ($arr as $key => $value) {
// //         if ($value == $numcheck) {
// //             $index = $key;
// //             break;
// //         }
// //     }
// //     return $index;
// // }


// // if (checkIntToIndex($listInt, 5) == -1) echo "Không tồn tại 5 trong mảng";
// // else {
// //     echo " Số 5 có trong mảng nằm ở vị trí index là " . checkIntToIndex($listInt, 5);
// // }

// function countNum($arr, $num)
// {
//     $count = 0;
//     foreach ($arr as $value) {
//         if ($value == $num) {
//             $count++;
//         }
//     }
//     return $count;
// }

// echo "Có " . CountNum($listInt, 5) . " số 5 tồn tại trong mảng.";

$array = [2,5,8,12,16,23,38,56,72,91];
function binarySearch($arr,$num){
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


echo binarySearch($array,23);
