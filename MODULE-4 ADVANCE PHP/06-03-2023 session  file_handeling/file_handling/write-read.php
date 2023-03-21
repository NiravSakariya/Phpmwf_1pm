<?php 
$file=fopen("ajax.txt","w+") or die("file is not exist");
if($file)
{
    echo "File opened successfully";
}
else 
{
    echo 'somthing wen wrong';
}
?>