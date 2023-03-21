<center>
    <form method="post">

        <h2>enter chek in</h2>
        <input type="datetime" name="check_in_date" required><br><br>
        <h2>enter chek out</h2>
        <input type="datetime" name="check_out_date" required><br><br>

        <input type="submit" name="su" value="submit">
    </form>
</center>



<?php
if(isset($_POST["su"])){ 
    $rent_per_day = 1200; // hotel rent per day
    $check_in_date = $_POST['check_in_date']; // get check-in date from user input
    $check_out_date = $_POST['check_out_date']; // get check-out date from user input

    // convert date strings to timestamps and calculate the difference in days
    $diff_in_days = (strtotime($check_out_date) - strtotime($check_in_date)) / (60 * 60 * 24);

    // calculate the total rent based on the number of days
    $total_rent = $diff_in_days * $rent_per_day;

    echo "<center><h1> You have stayed for $diff_in_days day(s) and your total rent is Rs. $total_rent. </h1></center>";
}
?>
