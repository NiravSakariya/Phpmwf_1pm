<?php 
require_once("navigation.php");
?>
<!-- content start here-->
<div class="container-fluid content  mt-1 p-5">
    <div class="row">
        <center>
            <div class="col-md-8  p-3 m-3">
                <div class="card">
                    <div class="card-header">Manage Profile </div>
                    <div class="card-body">
                    <h2 align="center" class="  p-2">Welcome To:
                    
                    <?php
                    echo ucfirst(rtrim($_SESSION["email"],'@gmail.com'));
                    ?>

                    </h2>
                    </div>
                </div>
            </div>
        </center>        
    </div>
</div>
<?php
require_once("footer.php");

?>





