<?php
function sendMail($email,$subject,$body,$altBody = "",$addAttachment = ''){
    include_once '../config/mail/smtp.php';
    
    $mail->addAddress($email);
    
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $altBody;
    if($addAttachment != ""){
    $mail->addAttachment($addAttachment);
    }
    if($mail->send()){
        return json_encode(array('status'=>true,'message'=>'sent mail'));
    }else{
        return json_encode(array('status'=>false,'message'=>'mail not sent'));
    }
}


?>