<?php 
$file=fopen("helloworld.txt","r+") or die("file is not exist");
// if($file)
// {
//     echo "File opened successfully";
// }
// else 
// {
//     echo 'somthing wen wrong';
// }

// fgets
echo fgets($file);
fclose($file);
?>