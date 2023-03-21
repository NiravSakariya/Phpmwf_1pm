<?php 
// $file=fopen("javascript.txt", "r+") or ("file not exist");
// $txt="javascript is a client side scripting language";
// echo fwrite($file,$txt);

// delete or unlink a file
$file="javascript.txt";
echo unlink($file);

?>