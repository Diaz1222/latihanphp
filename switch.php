<?php
$day = date("D");
switch ($day){
    case 'Sun' : $hari ="minggu"; break;
    case 'Mon' : $hari ="senin"; break;
    case 'Tue' : $hari ="selasa"; break;
    case 'Wed' : $hari ="rabu"; break;
    case 'Thu' : $hari ="kamis"; break;
    case 'Fri' : $hari ="jum'at"; break;
    case 'Sat' : $hari ="sabtu"; break;
    default    : $hari = "kiamat";
}
echo "hari ini hari <b>$hari</b>";
$month = date("M");
switch ($month){
    case 'Jan' : $bulan ="minggu"; break;
    case 'Feb' : $hari ="senin"; break;
    case 'Mar' : $hari ="selasa"; break;
    case 'Apr' : $hari ="rabu"; break;
    case 'Mei' : $hari ="kamis"; break;
    case 'Jun' : $hari ="jum'at"; break;
    case 'Jul' : $hari ="sabtu"; break;
    case 'Aug' : $hari ="kamis"; break;
    case 'Sep' : $bulan ="september"; break;
    case 'Okt' : $hari ="sabtu"; break;
    case 'Nov' : $hari ="jum'at"; break;
    case 'Des' : $hari ="sabtu"; break;
    default    : $hari = "kiamat";
}
echo ",<b>$bulan</b>";