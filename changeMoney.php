<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change money</title>
</head>

<body>
    <form action="changeMoney.php">
        <input type="text" name="num" placeholder="Nhập số tiền USD">USD<br>
        <input type="submit" value="Change">
    </form>
    <div> Result: =
        <?php
        if (isset($_REQUEST['num'])){
            define('rate', 23000, false);
            $num = $_REQUEST['num'];
            $vnd = $num * rate;
            echo $vnd;
        }
        ?>
    </div>
</body>

</html>