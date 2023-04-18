<?php
require_once("navbar.php");

if(isset($_POST["btn"]))
{
    $mail=$_POST["email"];
    $pass=$_POST["pass"];
if($mail=="nirav@gmail.com" && $pass=="nirav123")
{
    $_SESSION["email"]=$_POST["email"];
echo "<center><h1 text-sucess >login are succesfully</h1></center>";
header("refresh:2,profile.php");
}
else {
    echo "
    <center> <h1>your email and password are incorrencot </h1></center>";
    header("refresh:2,login.php");
    
}
}
?>

<div class="container md-5">


<form method="post" >
  <div class="mt-5">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>

</div>
<br><br><br><br><br> 
<?php
require_once("footer.php");
?>