<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            border: 1px solid black;
            height: 100px;
            width: 100px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;

        }
        .clear{
        margin bottom: 5px ;
        }
    </style>
</head>
<body>
    <?php
    
    $kolom = 5;
    $jumlahbaris = 5;
for ($baris=1; $baris <= $jumlahbaris; $baris++) {
    $jumlahkolom = $baris;
    for ($kolom= 1; $kolom <= $jumlahkolom; $kolom++) {
        echo"<div class='kotak'>$kolom</div>";
    }
    echo"</br>";
}

?>
   


</body>
</html>