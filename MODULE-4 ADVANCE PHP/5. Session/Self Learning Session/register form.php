<?php 

require_once("navigation.php");


?>

    <!-- REGISTER FORM START HERE -->
    <div class="" style="margin-top: 10%; margin-bottom: 10%;">
        <form method="post">
            <h3 class="text-center text-dark login-heading">Register Form</h3>
            <hr class="border border-1 border-dark w-50 mx-auto">
            <div class="form-group col-md-9 mt-3 mx-auto">
                <input type="text" name="email" placeholder="Email *" required class="form-control">
            </div>
            <div class="form-group col-md-9 mt-3 mx-auto">
                <input type="password" name="pass" placeholder="Password *" required class="form-control">
            </div>
            <div class="form-group col-md-9 mt-3 mx-auto">
                <input type="password" name="Cpass" placeholder="Confirm Password *" required class="form-control">
            </div>
            <div class="form-group col-md-9 mt-3 mx-auto">
                <input type="number" name="phone" placeholder="Phone *" required class="form-control">
            </div>
            <div class="form-group col-md-9 mt-3 mx-auto">
                <input type="file" placeholder="Upload File Here *" required class="form-control">
            </div>
            <div class="form-group col-md-9 mt-3 mx-auto">
                <textarea name="address" placeholder="Address *" required class="form-control"></textarea>
            </div>
            <div class="form-group col-md-9 mt-3 mx-auto">
                <input type="submit" name="login" class="btn btn-lg btn-success" value="Login"></a>
                <input type="reset" name="reset" class="btn btn-lg btn-danger" value="Reset">
            </div>
            <div class="form-group col-md-9 mt-3 mx-auto">
                <b class="text-dark">Alre4ady have an account ? <a href="Login.php" >Login account</a></b>
            </div>
        </form>
    </div>

    <?php 

require_once("footer.php");


?>