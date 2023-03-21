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
        <h2>Calculate compound interest</h2>
        <form method="post" >
            <!-- ci (A) = P(1 +r/n)^nt
        A	=	final amount
        P	=	initial principal balance
        r	=	interest rate
        n	=	number of times interest applied per time period
        t	=	number of time periods elapsed-->
         Enter a principle ammount (p):<input type="text" name="pbal" required><br><br>
         Enter ROI (r) :<input type="text" name="roi" required><br><br>
         Enter a numbers of Years (n):<input type="text" name="year" required><br><br>
        
         <input type="submit" name="claculate_ci" value="Calculate >>">
        </form>
    </center>
</body>

</html>


<?php 

if(isset($_POST["claculate_ci"]))
{
    $p=$_POST["pbal"];
    $r=$_POST["roi"];
    $n=$_POST["year"];
   

    $ci=$p*(1+$r/$n)*(1 +$r/$n);
    $A=$ci-$p;
    echo "<h2 align='center'>compound interest is :".$A."<h2>";

}


?>




