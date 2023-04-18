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
    <h2 style="margin-left: 50%;">View Cart</h2>
    <table width="60%" align="center" border="0">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>PName</th>
            <th>price</th>
            <th>select qty</th>
            <th>Action</th>
        </tr>

        <tr align="center">
            <td>0001</td>
            <td>
                <img src="Image/SG14.png" width="85px" height="85px" alt="">
            </td>
            <td>Addidas</td>
            <td>
                Rs.<input type="text" name="price" id="price" value="2000" style="border: none;width: 65px;" readonly>
            </td>
            <td>
                <input type="number" id="qty" min="1" max="10" value="1" onchange="crttotal()">
            </td>
            <td>
                <a href="cart_management.php">
                    <script>
                        alert('Are You Sure You Want To Delet Cart Items');
                    </script>Delet</a>

            </td>
        </tr>

        <tr>
            <td align="right" colspan="6">
                <h3 style="background-color: black; color: white; padding: 10px;">Subtotal Of Products Rs. <label id="tot">2000</label> </h3>
            </td>
        </tr>
    </table>
    <script>
        function crttotal() {
            var price = document.getElementById("price").value;
            var qty = document.getElementById("qty").value;
            var t = price * qty;
            document.getElementById("tot").innerHTML = t;

        }
    </script>
</body>

</html>