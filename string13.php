<form action="" method="POST">
nim anda :
<input type="text" name="txtnim"><br>
<input type="submit" name="Submit" value="Proses">
</form>

<?php
if (isset($_POST['Submit'])) {
$nim = $_POST['txtnim'];
}