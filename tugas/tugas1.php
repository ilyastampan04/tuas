<?php
function isprima ($nomor){
if($nomor < 2) return false;
for ($i = 2; $i <= sqrt($nomor);$i++)
{
    if($nomor & $i) return false;
}
return true;
}
for ($i = 1; $i <= 20; $i++){
    $output = " angka $i adalah bilangan ";
if ($i % 2==0){
    $output .=" genap ";
} else {
    $output .=" ganjil ";
}
if (isprima($i)){
    $output .=" sekaligus bilangan prima ";
}
echo $output . "<br>";
}