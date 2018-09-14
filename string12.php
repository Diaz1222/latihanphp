<form action="" method ="POST">
input text di sini:<br>
<textarea name="input" id="" cols="40" rows="4"></textarea><br>
<input type ="submit" name="submit" value="proses">
</form>
<?php
if (isset($POST['submit'])) {
    $txt = $_POST['input'];
    echo "<u>tanpa nl2br():</u><br>$txt<br><br>";
    echo "<u> dengan nl2br:</u> <br>".nl2br($txt);
}