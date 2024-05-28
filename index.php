<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Request.php" method="get">
        <input id="name" type="text" name="name" placeholder="Name">
        <input id="email" type="email" name="email" placeholder="Email">
        <input type="submit" value="Submit">
    </form>

    <form style="margin-top: 20px;" action="Request.php" method="post">
        <input id="name" type="number" name="number-one" placeholder="Enter number">
        <input id="email" type="number" name="number-two" placeholder="Enter number">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
