<?php 
// when a parent class properties access mby its multiple child class this is called multiple inheritance

// note : php and java is not support multiple inheritance
class A 
{
    public function display()
    {
        echo "Hi brijesh";
    }
}
class B 
{
    public function display1()
    {
        echo "Hi Yash";
    }
}

class C extends A,B
{
    public function display3()
    {
        echo "Hi Jigna";
    }
}

$obj=new C;
$obj->display();
$obj->display1();
$obj->display2();

?>