<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    

<center>
        <h2> check area of circle</h2>
        <form method="post" >
            <!-- A=πr2 -->
         Enter a radius (r):<input type="text" name="pname" required><br><br>
         
         <input type="submit" name="area" value="Calculate >>">
        </form>
    </center>
</body>
</html>

<?php
 
if(isset($_POST["area"]))
{
    $r=$_POST["pname"];
    $pai= 3.14;
   
   

    $ac=$r*$r*$pai;
    echo "<h2 align='center'>Area of Circle :".$ac."<h2>";

}

?>