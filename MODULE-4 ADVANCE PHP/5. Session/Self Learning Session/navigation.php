<?php
session_start();
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title> NIRAV' S SUNGLASSES</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/120/120010.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">

        <style>
            body {
                overflow-x: hidden;
                box-sizing: border-box;
                font-family: Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: left;
                font-family: a;
            }
            
            h1 {
                --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                /* -font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    -- */
                font-size: 4rem;
                font-weight: 400;
            }
            
            .navbar-nav {
                margin-left: 180px;
            }
            
            .nav-item {
                padding: 0px 25px;
            }
            
            .nav-link {
                color: black;
            }
            
            .mainimg {
                width: 100%;
                margin-top: 20px;
            }
            
            .imgicon {
                height: 60%;
                width: 60%;
                border-radius: 100%;
            }
            /* 
imgicon:hover {
    caret-color: red;
} */
            /* li a:hover {
    color: brown;
} */
            
            .classic {
                margin-top: 80px;
            }
            /* .header {
    position: fixed;
    top: 0;
    z-index: 6 !important;
} */
            
            .btn {
                margin-top: 10px;
            }
            
            .search1 {
                border-radius: 100%;
            }
            /* .div1 {
    margin: 0;
    padding: 0;
    overflow-x: hidden; */
            /* background-color: lightgray; */
            /* background: url('Image/Office.webp') no-repeat;
    background-size: 100% auto;
} */
            
            .footer {
                color: white;
                text-align: center;
                background-color: black;
            }
            
            .footer-style {
                background-color: grey;
                width: 100%;
                height: 40px;
                padding: 0.5%;
                color: white;
            }
            
            @media only screen and (max-width: 320px) and (max-width:480px) {
                .navbar-nav {
                    margin-left: 10px;
                }
                .nav-item {
                    padding: 0px 10px;
                }
                .search {
                    width: 180px;
                }
                .sea {
                    margin-left: -20px;
                }
                .mainimg {
                    width: 320px;
                    height: 180px;
                    margin-top: 10px;
                }
                .lazy {
                    height: 100%;
                    width: 100%;
                }
                .classic {
                    margin-top: 80px;
                    font-size: 40px;
                }
                .sec {
                    height: 100%;
                    width: 100%;
                }
            }
        </style>

    </head>

    <body>

        <!--HEADER FILE START-->
        <center>
            <div class="container-fluid p-1 text-dark bg-white header sticky-top">
                <div class="row">
                    <div class="col-md-4">
                        <b><i class="bi bi-inbox "></i>&nbsp;<a href="mailto:info@gmail.com">info@gmail.com</a></b>
                    </div>

                    <div class="col-md-4">
                        <center>
                            <a class="nav-link" href="index.php">
                                <h2>NIRAV' S</h2>
                            </a>
                        </center>
                    </div>



                    <?php 
                if(!isset($_SESSION["email"]))
                {
                ?>

                    <div class="col-md-4">
                        <a class="nav-link dropdown-toggle" style="font-size: 24px; color: black;" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-add"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Login.php">Login <i class="bi bi-box-arrow-in-right text-success fs-6 fw-bolder"></i></a></li>
                        <li><a class="dropdown-item" href="Register Form.php">Register</a></li>
                    </ul>
                        <a style="font-size: 24px; color: black;" href="cart.php" class="bi bi-cart"></a>&nbsp;&nbsp;
                        <a style="font-size: 24px; color: black;" href="wishlist.php" class="bi bi-bookmark-fill"></a>&nbsp;&nbsp;
                        <a style="font-size: 24px; color: black;" href="subscribe.php" class="bi bi-heart"></a>&nbsp;&nbsp;
                        <a style="font-size: 24px; color: black;" href="contactus.php" class="bi bi-telephone-fill"></a>
                    </div>

                    <?php 
                    }
                    else 
                    {
                    ?>

                    <div class="col-md-4">
                        <a href="" class="bi bi-person-add" style="font-size: 26px; color: black;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <h6 align="center" class="  p-2">Welcome To:
                                        <?php
                                         echo ucfirst(rtrim($_SESSION["email"],'@gmail.com'));
                                        ?>
                                    </h6>
                                </a>
                            </li>

                            <li><a class="dropdown-item" href="#">Manage Profile <i class="bi bi-person-circle text-primary fs-6 fw-bolder"></i></a></li>

                            <li><a class="dropdown-item" href="logout.php">LogOut  <i class="bi bi-box-arrow-right text-danger fs-6 fw-bolder"></i> </a></li>
                        </ul>
                        <a style="font-size: 24px; color: black;" href="cart.php" class="bi bi-cart"></a>&nbsp;&nbsp;
                        <a style="font-size: 24px; color: black;" href="wishlist.php" class="bi bi-bookmark-fill"></a>&nbsp;&nbsp;
                        <a style="font-size: 24px; color: black;" href="subscribe.php" class="bi bi-heart"></a>
                        <a style="font-size: 24px; color: black;" href="contactus.php" class="bi bi-telephone-fill"></a>
                    </div>

                    <?php 
                    }
                    ?>
                </div>
            </div>
        </center>
        <hr><br><br><br>
        <!--HEADER FILE CLOSE-->



        <!-- NAVBAR START HERE -->
        <nav class="navbar navbar-expand-md sticky-top p-1" style="background-color: white;">
            <button type="button" class="navbar-toggler  btn-white bg-white" data-bs-toggle="collapse" data-bs-target="#coll">
            <span class="bi bi-grid"></span>
             </button>

            <!-- menu start here -->
            <div class="collapse navbar-collapse" id="coll">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="sunglass.php"> SUNGLASS</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="eyeglass.php"> EYEGLASS </a></li>

                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="sports.php">SPORTS</a></li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="about_us.php">ABOUT US</a>
                    </li>

                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="our_stors.php">OUR STORES</a></li>
                    <form action="https://www.google.com/search" method="get" class="search-bar">
                <input class="search" style="margin-left: 40px; border: 0px; border-bottom: 1px; border-radius: 0px;" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success " style="border: 0px;" type="submit">
                <i class="bi bi-search search1"></i></button>
            </form>
                </ul>
                

            </div>
            </div>
            </div>
        </nav>
        <!-- NAVBAR CLOSE HERE -->



        <!-- 
    ===============================================================================

            https://www.amazon.in/Sunglasses/b?ie=UTF8&node=1968036031

    ===============================================================================
-->

    </body>

    </html>