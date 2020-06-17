<?php
include_once "../OOP/stopWatch.php";
include_once "../arraylist/MyList.php";

$listInt = new MyList();

for ($i=0;$i<500000;$i++){
    $listInt->add(rand(1,100000));
}

$time1 = new StopWacth();
$time1->start();
echo $time1->getStartTime()."<br>";
$listInt->indexOf(761);
$time1->end();
echo $time1->getEndTime();
echo "Tìm kiếm 1 phần tử trong mảng 500000 số bằng arraylist - stack: ".$time1->getElapsedTime()."microsecond";
