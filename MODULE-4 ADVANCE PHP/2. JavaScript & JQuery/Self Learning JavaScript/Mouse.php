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
    <script>
        function chng1() 
        {
            document.getElementById("imgg").src = 'Image/SG14.png'
        }

        function chng2()
        {
            document.getElementById("imgg").src = 'Image/SG16.png'
        }
    </script>
    <center>
        <img src="Image/SG14.png" id="imgg" style="width: 400px; height: 400px; margin-top: 8%" onmouseover="chng2()" onmouseout="chng1()" alt="">
    </center>
</body>

</html>