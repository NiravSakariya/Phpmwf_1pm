<?php 
session_start();
unset($_SESSION["email"]);
session_destroy();
echo "<script>
alert('Your are logout successfully')
window.location='index.php';
</script>";

?>