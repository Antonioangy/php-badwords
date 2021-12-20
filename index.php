<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            background-color: yellow;
            text-align: center;
        }
    </style>

    <?php
        $x = "la mia prima volta";
        $y = "su php";
        $z = $x . $y;
    ?>
    <?php
        echo $z;
    ?>
</body>
</html>