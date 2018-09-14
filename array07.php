<?php
$arrnilai = array ("ani" =>80,"otim" =>90,"sri" =>75,"budi" =>85);
echo  "<b> array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>"; 
asort($arrnilai);
reset($arrnilai);
echo "<b>setelah pengurutan dengan asort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "<pre>";

arsort($arrnilai);
reset($arrnilai);
echo "<b> setelah pengurutan denga arsorst()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";
