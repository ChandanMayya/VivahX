<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num" step="0.01">
        <input type="submit" value="SUb,it">
    </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $num=floatval($_POST['num']);
    echo $num;

}

?>