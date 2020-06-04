<?php
for ($i=0;$i<4;$i++){
    for ($j=0;$j<10;$j++){
        echo "*";
    }
    echo "<br>";
}
for ($i=1;$i<6;$i++){
    for ($j=0;$j<$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
for ($i=6;$i>0;$i--){
    for ($j=0;$j<$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
for ($i=6;$i>0;$i--){
    for ($j=0;$j<$i-1;$j++){
        echo "&nbsp;&nbsp;";
    }
    for ($j=0;$j<6-$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
?>