<?php 
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

?>