<?php
$str = "<b><u>everting i do,i do it for you</u></b>";

echo $str."<br>";
echo strip_tags ($str)."<br>";
echo strip_tags ($str,"(u)")."<br>";
echo htmlspesialchars ($str)."<br>";
echo htmlentitas ($str);