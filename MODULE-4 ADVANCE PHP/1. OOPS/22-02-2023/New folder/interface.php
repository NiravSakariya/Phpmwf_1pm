<?php 
// What are interfaces in PHP?

// A PHP interface defines a contract which a class must fulfill. If a PHP class is a blueprint for objects, an interface is a blueprint for classes. Any class implementing a given interface can be expected to have the same behavior in terms of what can be called, how it can be called, and what will be returned

//Interfaces allow you to specify what methods a class should implement.

//Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

//interface is used to support inheritance heiracrcy it meanse access  parent class properties by multiple child class 

//implements meanse a interface access by another interface

interface A 
{
    public function display();
}

interface B 
{
    public function display1();
}

interface C 
{
    public function display2();
}

interface D 
{
    public function display3();
}

class E implements A,B,C,D 
{
    public function display()
    {

        echo "I am jigna"."<br>";

    }
    
    public function display1()
    {
        
        echo "I am dixit"."<br>";
    }
    
    public function display2()
    {
        
        echo "I am yash"."<br>";
    }
    
    public function display3()
    {
        echo "I am Nirav"."<br>";
    }

}

$obj=new E;
$obj->display();
$obj->display1();
$obj->display2();
$obj->display3();

?>