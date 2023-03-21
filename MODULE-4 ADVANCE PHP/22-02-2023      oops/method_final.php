<?php 

class A 
{
    public final function test($a,$b,$c)
    {

        echo $a+$b+$c;

    }

} 
class B extends A
{

    public function test($a,$b,$c)
    {
        echo $a*$b*$c;
    }
}

$obj=new B;
$obj->test(10,20,30);

?>