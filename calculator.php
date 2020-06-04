<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .kq{
            border: solid 2px gray;
        }
    </style>
</head>

<body>
    <FORM method="POST" action="calculator.php">
        <h2>SIMPLE CALCULATOR</h2>
        <fieldset>
            <legend>Calculator:</legend>
            <table>
                <tr>
                    <td>
                        First operand
                    </td>
                    <td>
                        <input type="text" name="num1">
                    </td>
                </tr>
                <tr>
                    <td>Operator</td>
                    <td>
                        <select name="cal">
                            <option value="+">Addittion</option>
                            <option value="-">Subtracktion</option>
                            <option value="x">Multiply</option>
                            <option value="/">Divide</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Second operand</td>
                    <td><input type="text" name="num2"><br></td>
                </tr>
            </table>
            <input type="submit" value="Calculator">
        </fieldset>
    </FORM>
    <?php
    if (isset($_REQUEST['num1'])) {
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];
        $cal = $_REQUEST['cal'];
        if ($cal === "+") {
            $result = $num1 + $num2;
        }
        if ($cal === "-") {
            $result = $num1 - $num2;
        }
        if ($cal === "x") {
            $result = $num1 * $num2;
        }
        if ($cal === "/") {
            $result = $num1 / $num2;
        }
        echo "<div class='kq'><h2>Result</h2>" . $num1 . $cal . $num2 . "=" . $result."</div>";
    }
    ?>
</body>

</html>