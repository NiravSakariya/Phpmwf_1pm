<?php 
session_start();
if(isset($_POST["login"]))
{
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    if($em=='yashkumar@gmail.com' && $pass=='yash321')
    {
      $_SESSION["email"]=$_POST["email"]; 
      echo "<h3 align='center' style='color:green'>You are logged in successfully</h3>";
      header('Location:profile.php');
   
}
else 
{
    // echo "<h3 align='center' style='color:red'>Your email and password are Incorect try again</h3>";
    // header('refresh:4,index.php');
    echo "<script>
    alert('Your email and password are incorect try again')
    window.location='index.php';
    </script>";

}
}

?>
