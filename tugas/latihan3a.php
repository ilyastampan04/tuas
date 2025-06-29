<?php
function ganti($kelas, $tulisan){
return "<div class =$tulisan><strong>$kelas</strong></div>";
}
$kelas="hello world, here i come";
$tulisan="ganti-style";


echo ganti($kelas, $tulisan);
?>
<style>.ganti-style{
    font-size: 28px;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    color: #1a0547;
    font-style: italic;
}</style>
