<?php
function luas_segitiga($alas,$tinggi){
    return 1/2*($alas*$tinggi); 
}
$a = 6;
$t = 5;
echo "luas segitiga dengan alas $a dan tinggi $t  = ";
echo luas_segitiga($a,$t); 