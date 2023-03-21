<?php 
$file=fopen("helloworld.txt","r+") or die("file is not exist");
// fread
// echo fread($file,200);
echo fread($file,20);
fclose($file);
?>