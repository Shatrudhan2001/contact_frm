<?php
ini_set("display_errors", 1); 
error_reporting(E_ALL);
require_once 'include/config.php';
$msg = '';
$name = '';
$email = '';
$subject = '';
$mesg = '';
$dis_non = '';
if (!empty($_POST)) {
    // echo "<pre>";
    // echo phpinfo();
    // print_r($_POST);die;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['msg_subject'];
    $mesg = $_POST['message'];
    $captcha = $_POST['g-recaptcha-response'];

    if ($captcha == '') {
        $msg = "<strong style='color: red;'>Please check the the captcha.</strong>.";
        // die();
        // exit;
    } else {
        $dis_non = 'none';
        include 'include/mailtemp.php';
        // include 'include/usermailtemp.php';
        $mSubject = 'Contact Us';
        $mFrom = $FromMailId;
        $secretKey = $privatekey;
        
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) . '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response, true);
        // should return JSON with success as true
        if ($responseKeys["success"]) {
            $msg = '<strong style="color:green;">Your query has been submitted successfully, our team will get back to you shortly.</strong><a href="'.$SiteUrl.'" style="color:#3307e4;"> Go back to home</a>';
           include('send-mail.php');
            header('location: success.php');
        } else {
            $msg = "<strong style='color: red;'>Your are a boat. Please check the the captcha.</strong>.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
       
    </head>
    <body>
    <div class="col-lg-6 col-12">
            <div class="contact-form">
                <!-- <form class="form-wrap" id="contactForm" action="" method="post" enctype="multipart/form-data" style="display:<?php //echo $dis_non; ?>"> -->
                <form class="form-wrap" id="contactForm" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name*" id="name" required data-error="Please enter your name" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" value="<?php echo $email; ?>" id="email" required placeholder="Email*" data-error="Please enter your email" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="msg_subject" value="<?php echo $subject; ?>" placeholder="Subject*" id="msg_subject" required data-error="Please enter your subject" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group v1">
                                <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"><?php echo $mesg; ?></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <?php /*?>
                        <div class="form-group">
                            <div class="form-check checkbox">
                                <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required />
                                <label class="form-check-label" for="gridCheck"> I agree to the <a class="link style1" href="#.">terms &amp; conditions</a> and <a class="link style1" href="#.">privacy policy</a> </label>
                                <div class="help-block with-errors gridCheck-error"></div>
                            </div>
                        </div>
                        <?php */?>
                        <div class="col-md-12">
                            <div class="form-group v1"><div class="g-recaptcha mb10" data-sitekey="<?php echo $publickey; ?>"></div></div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn style2">Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
                <?php echo $msg; ?>
            </div>
        </div>
    </body>
</html>
