<?php
$a = 5;
$b = 5;
$c = false;
$namadepan = "angga";
$namabelakang = "cute";
 echo   "$a == $b : ".($a == $b);
 echo "<br>$a != $b : ".($a != $b);
 echo "<br> $a > $b : ".($a > $b);
 echo "<br> $a < $b : ".($a < $b);
 echo "<br> ($a == $b) && ($a>$b) : ".(($a==$b)&&($a>$b));
 echo "<br> ($a == $b) || ($a>$b) : ".(($a!=$b)||($a>$b));
 echo "<br> ($a == $b)xor($a>$b) : ".(($a==$b)xor($a<$b));
 echo "<br>! hasilnya : ".(!$c);

 echo "<br><br> contoh lebih dari ".($a<=$b); 
 echo "<br> ".$namadepan.$namabelakang;