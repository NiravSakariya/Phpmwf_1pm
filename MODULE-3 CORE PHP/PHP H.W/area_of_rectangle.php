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
        <h2>check area of rectangle</h2>
        <form method="post" >
            <!-- A=wl-->
         Enter a Length (l):<input type="text" name="len" required><br><br>
         Enter a Width (w):<input type="text" name="wid" required><br><br>
         
         <input type="submit" name="area" value="Calculate >>">
        </form>
    </center>
</body>

</html>

<?php 

if(isset($_POST["area"]))
{
    $w=$_POST["wid"];
    $l=$_POST["len"];
    

    $ar=$l*$w;
    echo "<h2 align='center'>simple interest is :".$ar."<h2>";

}


?>