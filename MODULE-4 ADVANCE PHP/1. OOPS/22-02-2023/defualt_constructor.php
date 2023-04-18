<?php 

class ABC 
{
    public $var="This is Brijesh";
    public function __construct() // default constructor or magic method
    {

        echo $this->var;

    }
}
$obj=new ABC;

?>