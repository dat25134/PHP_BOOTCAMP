<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
    <style>
        * {
            margin: 20px;
            text-align: left;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #58257b;
            border-radius: 4px;
        }

        .flex {
            display: flex;
        }
        .flex .input{
            flex: 70%;
        }
        #kq {
            flex: 30%;
            padding: 20px;
        }
    </style>
</head>

<body>
    <h2>Future Value Calculator</h2>
    <form action="FutureValueCalculator.php" method="POST">
        <label for="">Inventment Amount :</label> <input type="text" name="value"> <br>
        <label for="">Yearly Interest Rate :</label> <input type="text" name="rate"><br>
        <label for="">Number of Years :</label> <input type="text" name="year"><br>
        <div class="flex">
            <div class="input"><input type="submit" value="Caculator"></div>
            <div id="kq">
                <?php
                if (isset($_POST['value'])) {
                    $value = $_POST['value'];
                    $rate = $_POST['rate'];
                    $year = $_POST['year'];
                    for ($i = 0; $i < $year; $i++) {
                        $value += $rate * $value;
                    }
                    echo $value;
                }
                ?>
            </div>
        </div>

    </form>

</body>

</html>