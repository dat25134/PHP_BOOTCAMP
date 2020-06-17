<?php
include_once "Resize.php";
$shape =[];

function findShapeByName($arrShape,$shapeName){
    foreach ($arrShape as $key => $value){
        if ($shapeName == $value->name) {
            return $value;
        }
    }
    return "Không tìm thấy!!!";
}

    function findMaxAreaSameShape($typeShape, $arrShape){
        $maxArea = 0;
        $index = 0;
        if (strtoupper($typeShape) == "CIRCLE"){
            foreach ($arrShape as $key => $value){
                if ($value instanceof Circle){
                    if ($value->Area()>$maxArea) $maxArea = $value->Area();
                    $index = $key;
                }
            }
        }
        if (strtoupper($typeShape) == "RECTANGLE"){
            foreach ($arrShape as $key => $value){
                if ($value instanceof Rectangle){
                    if ($value->Area()>$maxArea) $maxArea = $value->Area();
                    $index = $key;
                }
            }
        }
        if (strtoupper($typeShape) == "SQUARE"){
            foreach ($arrShape as $key => $value){
                if ($value instanceof Square){
                    if ($value->Area()>$maxArea) $maxArea = $value->Area();
                    $index = $key;
                }
            }
        }

        return $maxArea." là diện tích lớn nhất của " . $typeShape." ".$index;
    }

    function findMinAreaSameShape($typeShape, $arrShape){
        $minArea = 0;
        $index = 0;
        if (strtoupper($typeShape) == "CIRCLE"){
            foreach ($arrShape as $key => $value){
                if ($value instanceof Circle){
                    if ($value->Area()<$minArea) $minArea = $value->perimeter();
                    $index = $key;
                }
            }
        }
        if (strtoupper($typeShape) == "RECTANGLE"){
            foreach ($arrShape as $key => $value){
                if ($value instanceof Rectangle){
                    if ($value->Area()<$minArea) $minArea = $value->perimeter();
                    $index = $key;
                }
            }
        }
        if (strtoupper($typeShape) == "SQUARE"){
            foreach ($arrShape as $key => $value){
                if ($value instanceof Square){
                    if ($value->Area()<$minArea) $minArea = $value->perimeter();
                    $index = $key;
                }
            }
        }

        return $minArea." là chu vi nhỏ nhất của " . $typeShape." ". $index;
    }

for ($i = 0;$i<1000;$i++){
    $creatRand = rand(1,3);
    switch ($creatRand){
        case 1:
            $name = "Circle ".$i;
            $shape[$i] = new Circle($name,rand(1,100));
        break;
        case 2:
            $name = "Rectagle ".$i;
            $shape[$i] = new Rectangle($name, rand(1,100),rand(1,100));
        break;
        case 3:
            $name = "Square ".$i;
            $shape[$i] = new Square($name, rand(1,100));
    }
}

print_r($shape);

print_r (findShapeByName($shape,"Circle 4"));
echo findMaxAreaSameShape("RECtangle",$shape);
echo findMinAreaSameShape("Circle",$shape);
$cir4 = findShapeByName($shape,"Circle 4");
if  ($cir4 instanceof Circle){
    echo "Vòng tròn :" . $cir4->name . " có bán kính " . $cir4->radius. "<br>";
    $cir4->resize();
    echo "Sau khi risize : Vòng tròn :" . $cir4->name . " có bán kính " . $cir4->radius. "<br>";
}