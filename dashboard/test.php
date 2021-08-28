<?php

$to = $email;
$from = "noreply@savearns.com";
$cmessage = "Best Regards<br /> <i>Team DotPedia</i>";

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$headers .= "X-Priority: 1 (Highest)\n";
$headers .= "X-MSMail-Priority: High\n";
$headers .= "Importance: High\n";

$subject = $subj;

$logo = 'https://dotpedia.com.ng/images/cover.png';
$url = 'https://dotpedia.com.ng';

$body = "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <title>DotLive from DotEightPlus</title>
</head>
<link rel='stylesheet' href='http://localhost/teams/savearns/assets/css/bootstrap.min.css'>

<body style='text-align: center;'>";
    $body .= "<section style='margin: 30px; margin-top: 50px ; background: #34459C; color: #fff;'>";
        $body .= "<img style='margin-top: 35px; width: 280px; height: 105px;' src='{$logo}' alt='DotPedia'>";
        $body .= "<h1 style='margin-top: 45px; color: #fff'>Activate your email to continue</h1>
        <br />";
        $body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br /><br />
            Kindly use the otp below to activate your account;</p>
        <br />";
        $body .= "<h3 style='margin-left: 45px; text-align: left;'><b>{$activator} 7473473</b></h3>
        <br />";
        $body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Do not bother replying this
            email. This is a virtual email</p>";
        $body .= "<p text-align: center;'><a href='https://dotpedia.com.ng/contact'><img style='width:150px;heght:150px'
                    src='http://localhost/teams/savearns/assets/footer.png'></a>";
            $body .= "
        <p style='text-align: center;'>Email.: <span style='color: #fff'>pdf@dotpedia.com.ng</span></p>";
        $body .= "<p style='text-align: center;'>Call/Chat.: <span style='color: #fff'>+234(0) 810 317 1902</span>
        </p>";
        $body .= "<h6 style='text-align: center; padding-bottom: 50px;'>Team Savearns</h6>";
        $body .= "<script src='http://localhost/teams/savearns/vendors/bootstrap/bootstrap.min.js'></script>";
        $body .= "
    </section>";
    $body .= "</body>

</html>";
echo $body;

?>