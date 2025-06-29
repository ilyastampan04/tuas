<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            border:1px solid black;
            height: 100px;
            width: 100px;
            text-align: center;
            line-height: 100px;
            display: inline-block;

        }
    </style>
</head>
<body>
    <?php
    $a="a";
    $b="b";
    $c="c";
    ?>
    <div class="row">
        <div class="kotak"><?=$a?></div>
    </div>
    <div class="row">
        <div class="kotak"><?=$a?></div>
        <div class="kotak"><?=$b?></div>
    </div>
    <div class="row">
        <div class="kotak"><?=$a?></div>
        <div class="kotak"><?=$b?></div>
        <div class="kotak"><?=$c?></div>
    </div>
</body>
</html>