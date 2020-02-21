<!DOCTYPE html>
<html>
<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require("../vendor/autoload.php");
$pageTitle = "Contact Us";
require("../templates/head.php");
?>s

<body>
    <?php
    $activeTitle = "Contact Us";
    require("../templates/navbar.php");
    ?>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Please fill out this form and we will get back to you shortly</h2>
                    <?php
                    if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['tel']) && isset($_POST['message'])) {
                        $email = new PHPMailer(TRUE);
                        $sentMessage = true;
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        $formcontent = "From: $name \n Message: $message";
                        $recipient = "inquiryspotliteevents@gmail.com";
                        $subject = "Message From: " . $name;
                        $mailheader = "From: $email \r\n";
                        $success = mail($recipient, $subject, $message, $mailheader);
                        if (sendMail($_POST['email'], $name, $_POST['tel'], $_POST['message'])) {
                    ?>
                            <h2 class="text-center">Message Sent!</h2>
                        <?php
                        } else {
                        ?>
                            <h2 class="text-center">Error Sending Mail.</h2>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="col-sm-12">
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputName1">Enter Your Name <span>*</span></label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="example-tel-input" class="form-label">Enter Your Phone <span>*</span></label>
                            <input name="tel" class="form-control" type="tel" placeholder="Enter your phone number" id="example-tel-input">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Your Email <span>*</span></label>
                            <input name="email" ype="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Type Your Message Here <span>*</span></label>
                            <textarea name="message" type="text" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Type your message here..."></textarea>
                        </div>
                        <div class="text-center my-2">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    require("../templates/footer.php");
    ?>

</body>

</html>

<?php


function sendMail($recipient, $name, $number, $message)
{
    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'inquiryspotliteevents@gmail.com';

    //Password to use for SMTP authentication
    $mail->Password = 'scotiabank1995';

    //Set who the message is to be sent from
    $mail->setFrom("inquiryspotliteevents@gmail.com", $name);

    //Set who the message is to be sent to
    $mail->addAddress("inquiryspotliteevents@gmail.com", $name);

    //Set the subject line
    $mail->Subject = "Inquiry From: " . $name . " , " . $number;

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($message, __DIR__);

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';


    //send the message, check for errors
    if (!$mail->send()) {
        return false;
    } else {
        if (save_mail($mail)) {
        }
        return true;
    }
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}

?>