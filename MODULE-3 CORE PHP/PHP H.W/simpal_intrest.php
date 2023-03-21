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
        <h2>Calculate simple interest</h2>
        <form method="post" >
            <!-- si=p*n*r/100 -->
         Enter a principle ammount (p):<input type="text" name="pname" required><br><br>
         Enter a numbers of Years (n):<input type="text" name="year" required><br><br>
         Enter ROI (r) :<input type="text" name="roi" required><br><br>
         <input type="submit" name="claculate_si" value="Calculate >>">
        </form>
    </center>
</body>

</html>


<?php 

if(isset($_POST["claculate_si"]))
{
    $p=$_POST["pname"];
    $n=$_POST["year"];
    $r=$_POST["roi"];

    $si=$p*$n*$r/100;
    echo "<h2 align='center'>simple interest is :".$si."<h2>";

}


?>