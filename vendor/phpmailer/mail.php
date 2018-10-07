<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);  
                            // Passing `true` enables exceptions
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'shraddha1295@gmail.com';
$mail->Password = 'shr@ddh@12';
$mail->SMTPSecure = 'tls';

$mail->From = 'shraddha1295@gmail.com';
$mail->FromName = 'Shraddha J';
$mail->addAddress('shraddha.webzone@gmail.com', 'Shraddha Webzone');

$mail->addReplyTo('shraddha1295@gmail.com');

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = 'Request for Freelancer';
$mail->Body    = 'Find my request in the portal.Please check';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';