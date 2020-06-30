<?php
include_once "connectDatabase.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Nvabar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="part1">
            <div class="header_left">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-youtube-play"></i>
                <a href="#">HOME</a>
            </div>
            <div class="header_right">
                <a href=""><i class="fa fa-address-card-o"></i> ABOUT</a>
                <a href=""><i class="fa fa-envelope-o"></i> CONTACT</a>
                <a href=""> <i class="fa fa-hand-o-right"></i> LOGIN</a>
            </div>
        </div>
        <div class="part2">


        </div>
        <div class="nvabar">
            <a href="">NEW <i class="fa fa-caret-down"></i></a>
            <div class="dropdown">
                <span><a href="">CATAGORIES <i class="fa fa-caret-down"></i></a></span>
                <div class="dropdown-content">
                    <h2>Catagories</h2>
                    <?php
                    foreach ($row as $key => $value) {
                        echo "<a href=''>" . $value['name'] . "</a>" . "<br>";
                    }
                    ?>
                </div>
            </div>
            <a href="">COOKWARE <i class="fa fa-caret-down"></i></a>
            <a href="">KITCHENWARE <i class="fa fa-caret-down"></i></a>
            <a href="">DRINKWARE <i class="fa fa-caret-down"></i></a>
            <a href=""> REUSABLE <i class="fa fa-caret-down"></i></a>
            <a href="">GIFTS & HOME <i class="fa fa-caret-down"></i></a>
            <a href=""> SALE <i class="fa fa-caret-down"></i></a>
            <a href=""> BRANDS <i class="fa fa-caret-down"></i></a>
        </div>
    </div>
    <div class="conttent">
        <i class="fa fa-angle-left" id="arrow_left" onclick="changeProduct('l')"></i>
        <div class="show" onclick="" id="show">
            <?php
            include "showitem2.php"
            ?>
        </div>
        <i class="fa fa-angle-right" id="arrow_right" onclick="changeProduct('r')"></i>
    </div>
    <script>
        function changeImg(img, id) {
            let change = document.getElementById(id);
            change.src = img;
        }
        let i = 0;

        function changeProduct(element) {
            let array = ['p0', 'p3', 'p6', 'p9', 'p12', 'p15', 'p18', 'p21', 'p24', 'p27', 'p30']
            let off,show;
            debugger;
            if (element == 'r') {
                if (i == array.length-1) {
                    off = document.getElementById(array[i]);
                    i=0;
                    show = document.getElementById(array[i]);
                    off.style.display = 'none';
                    show.style.display = 'grid';
                    return;
                } else {
                    off = document.getElementById(array[i]);
                    show = document.getElementById(array[i + 1]);
                }
                off.style.display = 'none';
                show.style.display = 'grid';
                i++;
            }
            if (element == 'l') {
                if (i==0){
                    off = document.getElementById(array[i]);
                    i=array.length-1;
                    show = document.getElementById(array[i]);
                    off.style.display = 'none';
                    show.style.display = 'grid';
                    return;
                }else{
                    off = document.getElementById(array[i]);
                    show = document.getElementById(array[i - 1]);
                }
                off.style.display = 'none';
                show.style.display = 'grid';
                i--;
            }
        }
    </script>
</body>

</html>