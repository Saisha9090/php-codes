
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "saisha\n";
fwrite($myfile, $txt);
$txt = "dua\n";
fwrite($myfile, $txt);
fclose($myfile);
?>