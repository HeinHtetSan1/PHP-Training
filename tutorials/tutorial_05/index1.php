<?php
//$myfile = fopen("sample.txt", "r");
//echo fread($myfile,filesize("sample.txt"));
//fclose($myfile);
?>
<?php
$myfile = fopen("sample.csv", "r");
echo fread($myfile,filesize("sample.csv"));
fclose($myfile);
?>