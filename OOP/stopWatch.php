<?php
class StopWacth{
    private $starTime;
    private $endTime;
    public function getStartTime(){
        return $this->starTime;
    }
    public function getEndTime(){
        return $this->endTime;
    }
    public function __construct()
    {
        $this->starTime = microtime(true);
    }
    public function start(){
        $this->starTime = microtime(true);
    }
    public function end(){
        $this->endTime = microtime(true);
    }
    public function getElapsedTime(){
        $milionsecondStart = $this->starTime;
        $milionsecondEnd = $this->endTime;
        return $milionsecondEnd-$milionsecondStart;
    }
}
// $time1 = new StopWacth();
// function SelectionSortAscending($mang)
// {
//     $sophantu = count($mang);
//     for ($i = 0; $i < $sophantu - 1; $i++)
//     {
//         $min = $i;
//         for ($j = $i + 1; $j < $sophantu; $j++){
//             if ($mang[$j] < $mang[$min]){
//                 $min = $j;
//             }
//         }
//         $temp = $mang[$i];
//         $mang[$i] = $mang[$min];
//         $mang[$min] = $temp;
//     }
//     return $mang;
// }
// $mang = [];
// for ($i=0;$i<10000;$i++){
//     $rand = rand(1,10000);
//     array_push($mang,$rand);
// }
// $time1->start();
// SelectionSortAscending($mang);
// $time1->end();
// echo " Thời gian để sắp xếp theo thứ tự giảm dần của 10000 số là " . $time1->getElapsedTime() . "ms"
$stack = [2,3,65,3,5,7,8,4];
sort($stack);
print_r($stack);
?>
