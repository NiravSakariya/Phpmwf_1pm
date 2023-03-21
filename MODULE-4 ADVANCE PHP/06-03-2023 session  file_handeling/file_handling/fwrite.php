<?php 
$file=fopen("ajax.txt","r+") or die("file is not exist");
// fread
// echo fread($file,200);
$txt="ajax stands for asynchrounous javascript and xml";
echo fwrite($file,$txt);
fclose($file);
?>