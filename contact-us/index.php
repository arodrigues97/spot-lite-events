<!DOCTYPE html>
<html>
<?php
$pageTitle = "Contact Us";
require("../templates/head.php");
?>
<body>
    <?php
    $activeTitle = "Contact Us";
    require("../templates/navbar.php");
    ?>
    <div class="contact">
        <div class="container">
            <?php
            if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['tel']) && isset($_POST['message'])) {
                $sentMessage = true;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $formcontent = "From: $name \n Message: $message";
                $recipient = "inquiryspotliteevents@gmail.com";
                $subject = "Message From: " . $name;
                $mailheader = "From: $email \r\n";
                if (mail($recipient,$subject, $message, $mailheader)){
                    echo "<h1>Sent!</h1>";
                }
            }
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Please fill out this form and we will get back to you shortly</h2>
                </div>
                <div class="col-sm-12">
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputName1">Enter Your Name <span>*</span></label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="example-tel-input" class="form-label">Enter Your Phone <span>*</span></label>
                            <input name="tel" class="form-control" type="tel" value="Enter your phone number" id="example-tel-input">
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