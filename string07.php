<?php
$number = 12345.67;
$english_format_number = number_format($number);
echo "<br>".$english_format_number; 
$nombre_formatfrancais = number_format($number,2, ',','');
echo "<br>".$format_indonesia;
$number = 1234.5678;
$english_format_number = number_format($number, 2, '.', '');
echo "<br>". $english_format_number; 