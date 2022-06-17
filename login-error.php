<? include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>

    <style>
        input[type=button] {
            background-color: #3145f5;
            width: 155px;
            border: none;
            color: white;
            padding: 10px;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 2px;
            cursor: pointer;
            border-radius: 8px;
            position: absolute;
            bottom: 150px;
            left: 875px;
            transition: 0.3s;
        }
        input[type=button]:hover {
            box-shadow: 2px 3px 10px 5px rgba(0,0,0,0.2);
        }

        .h1 {
            padding-top:200px;
            padding-bottom: 50px;
        }

    </style>
</head>
<body>
    <center>
    <h2 class="h1">Login Unsuccessful!</h2>
    <h2 class="h2">Please try Again</h2>

    <a href='index.php'><input type='button' value='Back to Login Page'></a> 


    </center>
</body>
</html>