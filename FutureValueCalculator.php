<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
    <style>
        *{
            margin: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Future Value Calculator</h2>
    <form action="FutureValueCalculator.php" method="POST">
    <input type="text" name="value"><label for="">Inventment Amount</label> <br>
    <input type="text" name="rate"><label for="">Yearly Interest Rate</label><br>
    <input type="text" name="year"><label for="">Number of Years</label><br>
    <input type="submit" value="Caculator">
    </form>
    <?php
    if (isset($_POST['value'])){
        $value = $_POST['value'];
        $rate = $_POST['rate'];
        $year = $_POST['year'];
        for ($i=0;$i<$year;$i++){
            $value += $rate*$value; 
        }
        echo $value;
    }
    ?>
</body>
</html>