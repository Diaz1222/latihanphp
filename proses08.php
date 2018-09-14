<?php
if (isset($_POST['pilih'])) {
    $_film=$_POST['kartun'];
    echo"film kartun favorit anda adalah:<font color=blue><b>$_film</b></font>";
}