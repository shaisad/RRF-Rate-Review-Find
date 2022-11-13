<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = "true";

$mail->SMTPSecure = "tls";

$mail->Port = "587";

$mail->Username = "intuitionverify@gmail.com";

$mail->Password = "";

$mail->Subject = "Verify Mail";

$mail->setFrom("intuitionverify@gmail.com");

$mail->Body = "HI";

$mail->addAddress("intuitionverify@gmail.com");

if($mail->Send()){
    echo "Email sent.";
}else{
    echo "Error.";
}

$mail->smtpClose();
?>