<?php 
/* 
access modifier : there are 3 type of access specifier
public  : A class property access inside of scope of outised of scope there we used public.
public access anyehere inside of class scope or outside of class scope

private : A class property access only inside of scope of not able to access outise of scope there we used private.
private access only access inside of class scope  class scope


protected : A class property access inside of scope or only by one child class  that is called protected.

Note : default method used is public 

*/
class A 
{
    public $public="i am public";
    private $private="i am private";
    protected $protected="i am protected";

    public function display()
    {
        echo $this->public."<br>";
        echo $this->private."<br>";
        echo $this->protected."<br>";
    }

}
$obj=new A;
//$obj->display();
echo $obj->public;  //work
echo $obj->private; // fatal error
echo $obj->protected; // fatal error

?>