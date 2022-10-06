<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/autoload.php';
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

//Server settings
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;    
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';               
$mail->SMTPAuth   = true;                           
$mail->Username   = 'bloodanytime.com@gmail.com';     
$mail->Password   = 'tuzoswandlzvqsce';                
$mail->SMTPSecure = 'tls';                          
$mail->Port       = 587;
$mail->setFrom('bloodanytime.com@gmail.com', 'Bloodanytime');                           

?>