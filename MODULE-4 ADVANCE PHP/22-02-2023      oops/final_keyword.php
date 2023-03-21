<?php 
/* final keyword  

final is a keyword used in oops
if final used as a class so we never inherit that class in another class.

final class A 
{
    public function display()
    {
        echo "Hi i am brijesh"."<br>";
    }
}

class B  
{
    public function display1()
    {
        echo "Hi i am Yash"."<br>";
    }

}

class C extends B 
{
    public function display2()
    {
        echo "Hi i am dixit"."<br>";
    }
}
$obj=new C;

$obj->display1();
$obj->display2();



final method  : if we make a method as final we never override that method in another method




*/

?>