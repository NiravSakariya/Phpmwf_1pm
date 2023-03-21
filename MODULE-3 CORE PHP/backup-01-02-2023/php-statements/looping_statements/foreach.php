<?php 
/* foreach loop is used to convert any array into value
array : array is one type of variable where we stored multiple data in a single element there we used array.

$arr=array("jay","dixit","vinay","harnish");

*/
$arr=array("jay","dixit","vinay","harnish","sanjay");
// echo $arr;
//print_r($arr);
foreach($arr as $value)
{
    echo "My name is :".$value."<br>";
}

?>