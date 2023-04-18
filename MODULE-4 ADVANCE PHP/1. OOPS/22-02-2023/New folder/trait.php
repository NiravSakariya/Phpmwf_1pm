<?php 
// trait : A trait is used to access inheritance in simple way there we used trait.
// single traite | multilevel trait | multiple traits

trait A 
{
    public function display()
    {
        echo "Hi brijesh"."<br>";
    }
}

trait B 
{
    public function display1()
    {
        echo "Hi Nirav"."<br>";
    }
}
class C 
{
         use A;
         use B;
    
}
$obj=new C;
$obj->display();
$obj->display1();




?>