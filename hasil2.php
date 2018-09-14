<?php
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat=$_POST['alamat'];
$jenis=$_POST['jk'];
$agama=$_POST['agama'];
$sekolah=$_POST['sekolah'];
$email=$_POST['email'];
$ortu=$_POST['ortu'];
$mapel=$_POST['mapel'];
if(isset($_POST['simpan'])){
echo "nama:<b>$nama</b><br>";
echo "nis:$nis<br>";
echo "alamat:$alamat<br>";
echo "jenis kelamin:$jenis<br>";
echo "agama:$agama<br>";
echo "sekolah:$sekolah<br>";
echo "E-mail:$email<br>";
echo "nama orang tua/wali:$ortu<br>";
    echo "mata pelajaran yang di sukai :<br>";
    if (isset($_POST['mapel01'])) {
    echo "+ " . $_POST['mapel01'] . "<br>";
    }
    if (isset($_POST['mapel02'])) {
    echo "+ " . $_POST['mapel02'] . "<br>";
    }
    if (isset($_POST['mapel03'])) {
    echo "+ " . $_POST['mapel03'] . "<br>";
    }
    if (isset($_POST['mapel04'])) {
    echo "+ " . $_POST['mapel04'] . "<br>";
    }
    if (isset($_POST['mapel05'])) {
        echo "+ " . $_POST['mapel05'] . "<br>";
        }
        if (isset($_POST['mapel05'])) {
        echo "+ " . $_POST['mapel05'] . "<br>";
        }
        if (isset($_POST['mapel06'])) {
            echo "+ " . $_POST['mapel06'] . "<br>";
            }
            if (isset($_POST['mapel07'])) {
            echo "+ " . $_POST['mapel07'] . "<br>";
            }

 $nilai = $_POST['ijasah'];
 if($nilai >=25){
     echo"nilai anda $nilai<br>";
     echo "anda lulus";
 }else{
     echo "nilai anda $nilai";
     echo "anda tidak lulus";
 }


}