<?php
$asean =[
"indonesia" => "dki jakarta",
"malaysia" => "kuala lumpur",
"brunei" => "banda seri begawan",
"thailand" => "bangkok",
"laos" => "vientiane",
"filipina" => "manila",
"myanmar" => "naypyidaw"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar negara asean dan ibukota :</h1>
    <?php foreach ($asean as $negara => $ibukota ) : ?>
        <li><?php echo "$negara : $ibukota "?></li>
        <?php endforeach?>
</body>
</html>