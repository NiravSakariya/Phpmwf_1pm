<?php
//static method : when we create any method as static it meanse we don't create object of class static method direct access class and its method uisng  scope resulation operator like A::display()
class A
{
    public static function display()
    {
        echo "i am using static method";
    }
}
A::display();
?>