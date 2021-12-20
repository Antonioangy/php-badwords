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
            background-color: red;
            text-align: center;
        }
    </style>

    <?php
        $p = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel obcaecati repudiandae impedit error quidem molestias quaerat natus laborum, quod, tempore voluptate magni adipisci deleniti vitae sapiente? Vel quam fuga saepe.";
    ?>
    <?php
        echo $p;
    ?>
    <?php
        <br>
        echo strlen($p);
    ?>
</body>
</html>