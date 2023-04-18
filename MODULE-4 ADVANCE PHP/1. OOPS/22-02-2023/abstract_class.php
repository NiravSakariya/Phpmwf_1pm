<?php 
//A abstract class or when we create a class as abstract class we never create the object onf abstract .

// we can not create an object of class A but we access abstract class property by inheritance


abstract class A 
{
    public function display()
    {
        echo "Hi i am brijesh"."<br>";
    }
}

class B extends A 
{
    public function display1()
    {
        echo "Hi i am rupesh"."<br>";
    }
}

$obj=new B;
$obj->display();
$obj->display1();



?>