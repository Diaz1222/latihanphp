<?php
$uang = 50000;
$makanan =25000;
$minuman = 10000;
$sisa = $uang - ($makanan + $minuman);
$total = ($makanan + $minuman);
echo "uang hari :RP.$uang<br>makanan :RP.$makanan<br>minuman :RP$minuman<br>total jajan :RP.$total<br>";
echo "sisa uang hari :RP.$sisa<br>";
if($sisa >0){
echo "hari orang <b>Hemat</b>";
}else{
    echo "hari orang yang <b>boros</b>";
}