 <?php
 $data=[[
    "kota" => "yogyakarta",
    "makanan" => "gudeg",
    "harga" => 20000
 ],[
 "kota" => "jambi",
    "makanan" => "tempoyak patin",
    "harga" => 12000],
    [
 "kota" => "bandung",
    "makanan" => "seblak",
    "harga" => 20000],
    [
 "kota" => "padang",
    "makanan" => "rendang",
    "harga" => 25000],
    [
 "kota" => "makassar",
    "makanan" => "pisang ijo",
    "harga" => 10000]];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <table border="1" cellpadding="10" >
        <tr>
            <th>kota</th>
            <th>makanan</th>
            <th>harga  </th>
        </tr>
        <?php
    foreach ($data as $row) :?>
    <tr>
        <td><?= $row["kota"];?></td>
        <td><?= $row["makanan"];?></td>
        <td>Rp.<?= number_format($row["harga"],0,'.','.');?></td>
    </tr>
    <?php endforeach; ?> 
</table>
 </body>
 </html>