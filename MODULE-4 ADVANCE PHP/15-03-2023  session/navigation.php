<!-- navbar start here -->
<nav class="navbar navbar-expand-md bg-dark p-1">
    <!-- logo start here -->
    <a href="" class="navbar-brand p-1"><i class="bi bi-browser-edge"></i> &nbsp; Yashraj e-commerce</a>

    <button type="button" class="navbar-toggler  btn-white bg-white" data-bs-toggle="collapse" data-bs-target="#Coll">
        <span class="bi bi-grid-3x2-gap-fill"></span>
    </button>
    
    <!-- menu start  -->
   <div class="collapse navbar-collapse" id="Coll">
    <ul class="navbar-link p-1">
    <li><a href="index.php"><i class="bi bi-house"></i>Home</a></li>
    <li><a href="aboutus.php">Aboutus</a></li>
    <li><a href="services.php">OurServices</a></li>
    <li><a href="gallery.php"><i class="bi bi-image"></i>Gallery</a></li>
    <li><a href="portfolio.html">Portfolio</a></li>

    <?php 
    if(!isset($_SESSION["email"]))
    {
    ?>
    
    <li class="dropdown"><a class="dropdown-toggle text-white" data-bs-toggle="dropdown" href="#"><i class="bi bi-person"></i> Account</a>
    <ul class="dropdown-menu bg-dark">
        <li><a href="" data-bs-toggle="modal" data-bs-target="#reg"><i class="bi bi-person"></i> SignUp!</a></li>
        <li><a href=""><i class="bi bi-person"></i> SignIn!</a></li>
    </ul>
    </li>

    <?php 
    }
    else 
    {
    ?>

<li class="dropdown"><a class="dropdown-toggle text-white" data-bs-toggle="dropdown" href="#"><i class="bi bi-person"></i> Welcome : <?php echo rtrim($_SESSION["email"],"@gmail.com");?></a>
    <ul class="dropdown-menu bg-dark" style="min-width:200px">
        <li><a href=""><i class="bi bi-person"></i> Manage Profile</a></li>
        <li><a href=""><i class="bi bi-lock"></i> Change Password</a></li>
        <li><a href=""><i class="bi bi-trash"></i> Remove Account</a></li>
        <li><a href="logout.php" onclick="return confirm('Are you sure to Logout as users ?')"><i class="bi bi-power"></i> Logout ?</a></li>
</ul>
</li>

    <?php 
    }
    ?>
    
    <li><a href="contactus.php">ContactUs</a></li>
   </ul>
   </div>
</nav>
