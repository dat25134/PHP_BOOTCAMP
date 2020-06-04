<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>

<body>
    <form action="primenumber.php" method="post">
        <input type="text" placeholder="Nhập vào số lượng số nguyên tố đầu tiên muốn hiển thị" name="num">
        <input type="submit" value="Display">
    </form>
    <?php
    if (isset($_REQUEST['num'])) {
        $number = $_POST['num'];
        function primeNumber($num)
        {
            for ($i = 2; $i <= $num / 2; $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        $i = 0;$j=2;
        while ($i < $number) {
            if (primeNumber($j)) {
                $i++;
                echo $j." ";
            }
            $j++;
        }
    }
    ?>
</body>

</html>