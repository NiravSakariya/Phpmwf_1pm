<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("navigation.php");



// Mailer Library

if(isset($_POST["sub"]))
{

    require_once("PHPMailer/PHPMailer.php");
    require_once("PHPMailer/SMTP.php");
    require_once("PHPMailer/Exception.php");


    $fnm=$_POST["fnm"];
    $lnm=$_POST["lnm"];
    $ml=$_POST["email"];
    $mob=$_POST["phone"];
    $msg=$_POST["msg"];

    $mail = new PHPMailer(true);

    try
    {
        //Server settings
        $mail->SMTPDebug = False;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'niravmovie04@gmail.com';                     //SMTP username
        $mail->Password   = 'jnnhiibstqdrqaom';                               //SMTP password
        $mail->SMTPSecure = "TLS" ;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($_POST["email"], 'Mail sending');
        $mail->addAddress('niravmovie04@gmail.com', 'Contact Us Mail sending');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/Temp2/Image/image1.jpg' ,'new.jpg');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact with us Email sending data';
        $mail->Body    = "<img src='https://cdn.dribbble.com/users/13543/screenshots/1523277/success.gif'>"."<br>"."Customer First Name Is :".$fnm."<br>"."Customer Last Name Is :".$lnm."<br>"."Customer email Is :".$ml."<br>". "Customer Phone Is :" .$mob."<br>"."Customer Message Is :".$msg."<br>"." Nirav's E-Commerse Pvt. Ltd. Contact Us Sending Emails "."<br>"."Contact Us On : (+91)-7894556123"."<br>"."Emailus: <a href ='mailto:niravmovie04@gmail.com'>nirav@gmail.com</a>";
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo "<script> alert('Thanks For Contact With Us Our One Of Admin Contact With You Soon!')
        window.location='emailsuccessmsg.php';
        </script>";
    }

    catch (Exception $e)
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


<div class="container-fluid content  mt-1 p-5">
    <div class="row">
        <div class="col-md-3 shadow bg-light p-3 m-3">
            <h5 align="center" class="bg-dark text-white p-2">Select Categories</h5>

            <ul class="sidebar-link">
                <li><a href="">24x7 Suppoprt</a></li>
                <li><a href="">Online Support</a></li>
                <li><a href="">Online payments</a></li>
                <li><a href="">Return Policy</a></li>
                <li><a href="">Refund policy</a></li>
                <li><a href="">Home delivery</a></li>
            </ul>

            <h5 align="center" class="bg-dark text-white p-2">Get in Touch with us</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.6433229747!2d72.74109780863925!3d19.08252232377542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1672916443768!5m2!1sen!2sin"
                width="288" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

        <div class="col-md-8  p-3 m-3">

            <div class="card">
                <div class="card-header" style="background-color: wheat;">
                <center><h2>Contact With Us For More Details</h2></center></div>
                <div class="card-body">
                    <div class="row">
                        <form method="post">
                         
                            
                            <div class="form-group col-md-9 mt-3 mx-auto">
                                <input type="text" name="fnm" placeholder="First Name*" required class="form-control">
                            </div>

                            <div class="form-group col-md-9 mt-3 mx-auto">
                                <input type="text" name="lnm" placeholder="Last Name *" required class="form-control">
                            </div>

                            <div class="form-group col-md-9 mt-3 mx-auto">
                                <input type="text" name="email" placeholder="Email *" required class="form-control">
                            </div>

                            <div class="form-group col-md-9 mt-3 mx-auto">
                                <input type="number" name="phone" placeholder="Phone *" required class="form-control">
                                    </div>
                            </div>
                            <div class="form-group col-md-9 mt-3 mx-auto">
                                <textarea name="msg" placeholder="Message *" required class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-9 mt-3 mx-auto">
                                <input type="submit" name="sub" class="btn btn-lg btn-success" value="Send"></a>
                                <input type="reset" name="reset" class="btn btn-lg btn-danger" value="Reset">
                            </div>
                            <div class="form-group col-md-9 mt-3 mx-auto">
                                <b class="text-dark">Don't have an account ? <a href="" data-bs-toggle="modal" data-bs-target="#reg">Create Your account</a></b>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php
require_once("footer.php");
?>