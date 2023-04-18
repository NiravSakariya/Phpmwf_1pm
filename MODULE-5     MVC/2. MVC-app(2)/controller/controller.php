<?php 
require_once("model/model.php");
class Controller extends Model
{
    public function __construct()
    {
        //logic : WAP to print your name take input from users
        parent:: __construct();
        // set buttons
        // if(isset($_POST["sub"]))
        // {
        //     $nm=$_POST["nm"];
        //     echo "<h3 align='center' style='color:green'>Your name is : $nm</h3>";
        // }
        
        // add data in contact us table logic
        if(isset($_POST["addcontact"]))
        {
          $nm=$_POST["name"];
          $em=$_POST["email"];
          $fnm=$_POST["fname"];
          $lnm=$_POST["lname"];
          $phone=$_POST["phone"];
          $msg=$_POST["message"];  
          $data=array("name"=>$nm,"email"=>$em,"firstname"=>$fnm,"lastname"=>$lnm,"phone"=>$phone,"message"=>$msg);
          $chk=$this->insertalladata($data,'tbl_contact');
          if($chk)
          {
            echo "<script>
            alert('Thanks for contact with us we will contact with you soon!')
            window.location='contact-us';
            </script>";
          }
        }
        // load templates routing 

        if($_SERVER["PATH_INFO"])
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                    
                case '/about-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("aboutus.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                case '/contact-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("contactus.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                    
                case '/products':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("products.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                case '/viewcart':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("viewcart.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                    
                case '/youtubechanel':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("youtubechanel.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;

                default :
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                // require_once("footer.php");    
            }
        }
         

    }
}
$obj=new Controller;

?>