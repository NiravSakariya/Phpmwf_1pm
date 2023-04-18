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
        function test() {
            document.getElementById("para").style = "color:Green; padding:10%; margin:20"
        }
    </script>
    <center>
        <p id="para"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, perspiciatis eaque ea, nam ut repellat est debitis laudantium, earum eius fugiat exercitationem autem? Mollitia nam dignissimos sed ipsa ullam beatae.</p>
        <button type="button" onclick="test()">Click Me</button>
    </center>
</body>

</html>