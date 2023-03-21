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
        <h2>Average Marks</h2>
        <form method="post" >
            <!--   Average = (Sum of Observations) ÷ (Total Numbers of Observations) -->
            Enter The Marks Of Maths:<input type="text" name="maths" required><br><br> 
            Enter The Marks Of Chemistry:<input type="text" name="chem" required><br><br> 
            Enter The Marks Of Computer:<input type="text" name="comp" required><br><br>
            <input type="submit" name="cla_ci" value="Calculate >>">
        </form>
    </center>
</body>

</html>

<?php
if(isset($_POST["cla_ci"]))
{
    $maths=$_POST["maths"];
    $chem=$_POST["chem"];
    $comp=$_POST["comp"];
    $A=$maths+$chem+$comp/3;
    echo "<h2 align='center'>Average Marks Is :".$A." </h2>";
}
?>


