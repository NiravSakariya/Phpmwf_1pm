<?php 
// method overriding : when we used same function and pass with same argument to create any application i.e called method overriding

class A 
{
    public function test($a,$b,$c)
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