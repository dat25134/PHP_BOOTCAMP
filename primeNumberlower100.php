<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>

<body>
    <form action="primenumberlower100.php" method="post">
        <input type="submit" value="Display các số nguyên tố bé hơn 100">
    </form>
    <?php 
        function primeNumber($num)
        {
            for ($i = 2; $i <= $num / 2; $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        $j=2;
        while ($j < 100) {
            if (primeNumber($j)) {
                echo $j." ";
            }
            $j++;
        }
    ?>
</body>

</html>