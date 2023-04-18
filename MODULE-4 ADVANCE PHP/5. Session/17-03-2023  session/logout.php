<?php
session_start();
unset($_SESSION["email"]);
session_destroy();
echo "<script>
alert('Logout successfully')
window.location='login.php';
</script>";
?>