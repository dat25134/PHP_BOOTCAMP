<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
</head>

<body>
    <form action="display_discount.php" method="POST">
        <label for="">Product Description</label><input type="text" name="name">
        <label for=""> List Price </label> <input type="text" name="money">
        <label for="">Discount Percent(%)</label> <input type="text" name="percent">
        <input type="submit" value="Calculate Discount">
    </form>
    <?php
    if (isset($_REQUEST['money'])) {
        $money = $_REQUEST['money'];
        $percent = $_REQUEST['percent'];
        $money = $money - $money * $percent * 0.01;
        echo $money;
    }
    ?>
</body>

</html>