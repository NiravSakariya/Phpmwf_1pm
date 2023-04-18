<?php
require_once("navigation.php");

if(isset($_POST["submit"]))
{
    $email = $_POST["email"];
    $password  =$_POST["password"];
    if($email=='nirav@gmail.com' && $password=='n456')
    {
        $_SESSION["email"]=$_POST["email"];
        echo "<script>
        alert('You are logged in Successfully')
        window.location='profile.php';
        </script>";
    }
    else
    {
        // echo"<h2 align='center' style='color:red'>Your Email or Password is Incorrect</h2>";
        // header('refresh:4,logout.php');
        echo "<script>
        alert('Your Email or Password is Incorrect')
        window.location='login.php';
        </script>";
    }
}
?>

    <!-- Form Start Here -->
    <div class="" style="margin-top: 10%; ">
        <form method="post">
            <h1 class="text-center text-dark login-heading">Login Form</h1>
            <hr class="border border-1 border-dark w-25 mx-auto">
            <div class="form-group col-md-4 mt-3 mx-auto">
                <input type="text" name="email" placeholder="Email *" required class="form-control">
            </div>
            <div class="form-group col-md-4 mt-3 mx-auto">
                <input type="password" name="password" placeholder="Password *" required class="form-control">
            </div>
            <div class="form-group col-md-4 mt-3 mx-auto">
                <input type="submit" name="submit" class="btn btn-lg btn-success" value="Login"></a>

                <div class="form-group col-md-12 mt-3 mx-auto">
                    <b class="text-dark">Don't have an account ? <a href="Register Form.php" >Create Your account</a></b>
                </div>
        </form>
        </div>

        <?php 
        require_once("footer.php");
        ?>



