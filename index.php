<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $_POST["welkekaart"];
fwrite($myfile, $txt);
fclose($myfile);
?>
