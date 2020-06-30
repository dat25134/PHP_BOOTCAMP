<?php
foreach ($row as $key => $value) {
    if ($key < $combo3) {
        $img = $value['img'];
        $img2 = $value['img2'];
        $id = $value['ID'];
        $change1 = "'$img2','$id'";
        $change2 = "'$img','$id'";
        echo "<div class='product'>";
        echo '<div class="anh"><img src="' . $img . '" onmouseover="changeImg(' . $change1 . ')" onmouseout="changeImg(' . $change2 . ')" id="' . $id . '"></div>';
        echo "<h3>" . $value['ID'] . " </h3>";
        echo "<span><i class='fa fa-cny'></i>" . $value['price'] . "</span> <b>RRP</b>";
        echo "<h2>" . $value['name'] . "</h2>";
        echo "<div class = 'button'><button><i class='fa fa-eye'></i> QUICK VIEW </button></div>";
        echo "</div>";
    }
}
?>