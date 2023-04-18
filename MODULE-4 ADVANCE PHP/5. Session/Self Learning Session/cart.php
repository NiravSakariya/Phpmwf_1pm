<?php 
require_once("navigation.php");

?>




<!-- Content Start Here -->
<div class="cart">
    <center><img src="Image/cart.webp" style="margin: 6%; opacity: 0.2;" alt=""></center>
</div>

<div style=" background-color: white; height: 250px;">
        <h2 style="margin-left: 50%; margin-top: -22%;">View Cart</h2>
        <table width="60% " align="center" border="0">
            <tr align="center">
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
                    <a href="cart.php">
                        Delet<script>
                            // alert('Are You Sure You Want To Delet Cart Items');
                        </script></a>

                </td>
            </tr>

            <tr>
                <td align="right" colspan="6">
                    <h3 style="background-color: black; color: white; padding: 10px;">Subtotal Of Products Rs. <label id="tot">2000</label> </h3>
                </td>
            </tr>
        </table>
    </div>
    <script>
        function crttotal() {
            var price = document.getElementById("price").value;
            var qty = document.getElementById("qty").value;
            var t = price * qty;
            document.getElementById("tot").innerHTML = t;

        }
    </script>
<?php 


require_once("footer.php");


?>