<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="" METHOD="POST">
E-mail : <input type="text" name="email"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="Input" value="login">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$e = $_POST['email'];
$p = $_POST['pass'];
if($e == "diaz1222@gmail.com" && $p == "123456"){
    echo "anda berhasil login!!";
}else{
    echo "anda gagal login!!!cek E-mail dan pass kamu";
}

}
?>