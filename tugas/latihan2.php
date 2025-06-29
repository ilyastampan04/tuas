<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <td>kolom 1</td>
        <td>kolom 2</td>
        <td>kolom 3</td>
        <td>kolom 4</td>
        <td>kolom 5</td>
        <?php

        for ( $i=1; $i<=5; $i++){
            echo"<tr>";
            for( $j= 1; $j<= 5; $j++){
                echo"<td>baris ke $i kolom $j</td>";
                 };
            echo"</tr>";
        };
            ?>
    </table>
    
</body>
</html>
