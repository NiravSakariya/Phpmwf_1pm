<?php 
class person 
{
    public function display()
    {
        echo "I am Brijesh kumar pandey"."<br>";
    }
}

class employee extends person 

{
    public function display1()
    {
        echo "Brijesh is working in Tops";
    }
}

$obj=new employee;
$obj->display();
$obj->display1();

?>