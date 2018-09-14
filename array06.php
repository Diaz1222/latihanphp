<?php
$arrnilai = array ("ani" =>80,"otim" =>90,"sri" =>75,"budi" =>85);
echo  "<b> array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>"; 
sort($arrnilai);
reset($arrnilai);
echo "<b>setelah pengurutan dengan sort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "<pre>";

rsort($arrnilai);
reset($arrnilai);
echo "<b> setelah pengurutan denga rsort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";
