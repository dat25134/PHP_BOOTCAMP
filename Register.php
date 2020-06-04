<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
            width: 50%;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=email] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=email]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

        span {
            color: red;
            text-align: right;
            display: block;
        }
    </style>
</head>

<body>

    <form action="Register.php" method="POST">
        <div class="container">
            <h1>Register</h1>
            <hr>

            <label for="name"><b>Full Name</b></label>
            <input type="text" placeholder="Full Name" name="name" id="name">
            <span>
                <?php if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                    $name = $_POST['name'];
                    if (empty($name)) echo "Please input your name<br>";
                }
                ?>
            </span>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email">
            <span>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                    $email = $_POST['email'];
                    if (empty($email)) {
                        echo "Please input your email <br>";
                    } else {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo ("$email is a valid email address <br>");
                        } else {
                            echo ("$email is not a valid email address<br>");
                        }
                    }
                }
                ?>
            </span>
            <label for="phone"><b>Phone Number</b></label>
            <input type="text" placeholder="Phone Number" name="phone" id="phone">
            <span>
                <?php
                 if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                    $phone = $_POST['phone'];
                    if (empty($phone)) echo "Please input your phone";
                 }
                ?>
            </span>
            <hr>
            <button type="submit" class="registerbtn">Register</button>
        </div>
        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
        <?php
            
        ?>
    </form>
</body>

</html>