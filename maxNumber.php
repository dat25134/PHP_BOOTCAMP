<?php
   $pointRandom = [];
   $max = 0;
   for ($i = 0; $i<5; $i++){
       for ($j = 0; $j<5;$j++){
           $pointRandom[$i][$j] = rand(1,100);
           if ($pointRandom[$i][$j]>$max) {
               $max = $pointRandom[$i][$j];
           }
       }
   } 
   echo " Giá trị lớn nhất trong mảng là " . $max;
?>