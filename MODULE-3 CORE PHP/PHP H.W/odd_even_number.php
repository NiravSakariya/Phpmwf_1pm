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
        <form method="post">
            <input type="number" name="num" placeholder=" Enter Number"><br><br>
            <input type="submit" value="submit" name="cal">

        </form>

    </center>


    <?php 
if(isset($_POST["cal"]))
{
    $num=$_POST["num"];
    if($num%2==0)
{
    echo "<h2 align='center'>Number is Even</h2>";
}   

else 
{
    echo "<h2 align='center'>Number is Odd</h2>";
}
}
?>
</body>

</html>