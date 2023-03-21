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
        echo "Brijesh is working in Tops"."<br>";
    }
}

class department extends employee 

{
    public function display2()
    {
        echo "Brijesh is working in information technology department"."<br>";
    }
}

$obj=new department;
$obj->display();
$obj->display1();
$obj->display2();
?>