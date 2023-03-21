<?php
require_once("navbar.php");
if(!isset($_SESSION["email"]))
{
    echo "<script>
    window.location='login.php';
    </script>";
}

?>
<div class="container md-5 p-5" >
<h1>welcoeme to :<?php echo rtrim($_SESSION["email"],"@gmail.com"); ?></h1>

</div>
<?php
require_once("footer.php");
?>

