<?php 
// method overloading : when we used same function and pass different argument to create any application i.e called method overloading

class A 
{
    public function test($a,$b)
    {

        echo $a+$b;

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
//B::test(10,20,30);
// method overloading error
?>