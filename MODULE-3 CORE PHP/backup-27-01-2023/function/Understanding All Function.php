<?php 
/* 
function : A function is a block of code or group of code that can be used to complete any task that is called function.

how to declare function 
syntax : 
function functionname()
{
    statements;
}
call a function
*/
//name print
// $name="hi miten";
// echo $name;

function nm()
{
    $name="Hi i am Miten";
    echo $name;
}
nm();


?>




<?php 
/* types of function :
         a) user defined function
         b) inbuild function 
*/
?>




<?php 
function test()
{
    $name="My name is Dixit";
    echo $name;
}
test();
?>




<?php 
// data type : which type of values stored in variables i.e called datatype.
        //   integer, float, string , biginteger
//predefined function :
 // var_dump() : This is a inbuild function that is used to tell us about variables all datat types and descriptions


$name="hi i am jigna"; //string
$name1='65454';        // string 
$a=1023121;           // integer
$b=212.54154;         //float

// echo $name."<br>";
// echo var_dump($name)."<br>";
// echo var_dump($name1)."<br>";
// echo var_dump($a)."<br>";
// echo var_dump($b)."<br>";
var_dump($name);

?>




<?php 
/* call a function
           a)call by value
           b) call by reference
 */
?>




<?php 
function sum($a,$b)
{

    $c=$a=$b;
    echo "Additions of numbers is :".$c;
}
sum(10,20);
?>




<?php 
function nm()
{
    $name="Hi Dixit radadiya";
    return $name;
}
echo nm();

?>




<?php 
function nm(&$fnm) //&$fnm is a refrence variable
{
    echo "My firstName is :Brijesh"."<br>";
}
$lnm="My lastnam is :Pandey";
nm($fnm);
echo $lnm;

?>