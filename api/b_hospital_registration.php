<?php
include "../config/db/connection.php";
include_once '../controllers/mail.php';
include_once '../config/api_url.php';
session_start();
$data = json_decode(file_get_contents("php://input"), true);
if (isset($_GET['type']) && $_GET['type'] == 'send-otp') {
    $email = $data['email'];
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;
    $subject = 'One Time Password (OTP)';
    $body = '<h4>Bloodandytime sent you OTP</h4>
            <p>OTP code is : '.$otp.'</p>
            <p>have a nice day</p>';
    $altBody = 'Bloodanytime sent you OTP. OTP code is : '.$otp.'';
    echo sendMail($email,$subject,$body,$altBody);
}
if (isset($_GET['type']) && $_GET['type'] == 'destroy-otp') {
    unset($_SESSION['otp']);
}
if (isset($_GET['type']) && $_GET['type'] == 'verify-otp') {
    $otp = $data['otp'];
    if (isset($_SESSION['otp']) && $_SESSION['otp'] == $otp) {
        unset($_SESSION['otp']);
        echo json_encode(array("status" => true, "message" => "Email verified"));
    } else {
        echo json_encode(array("status" => false, "message" => "Invalid OTP"));
    }
}
if (isset($_GET['type']) && $_GET['type'] == 'register') {
    $full_name = $data['hospital_name'];
    $hos_id = $data['hospital_id'];
    $mail = $data['your_email'];
    $phone = $data['phone'];
    $state = $data['state'];
    $city = $data['city'];
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    $password = sha1(implode($pass));
    $tandc = $data['checkbox'];
    $subject = 'Registered';
    $body = '<h4>Thanks for Registering at Bloodanytime</h4>
            <p>Hi '.$full_name.',</p>
            <p>Thank you for creating your account at Bloodanytime. Your acoount details are as follows:</p>
            <p><b>Username</b> : '.$hos_id.'</p>
            <p><b>Password</b> : '.implode($pass).'</p>
            <p>To sign in to your account, please visit <a href="'.$url.'hospital_login.php">'.$url.'hospital_login.php</a></p>';
    $altBody = 'Thanks for Registering at Bloodanytime. Hi '.$full_name.', Thank you for creating your account at Bloodanytime. Your account details are as follows: Username : '.$hos_id.', Password : '.implode($pass).'. To sign in to your account, please visit '.$url.'hospital_login.php';
        $query = "INSERT INTO hospital (name,hospital_id,email,phone,state,city,password,terms_and_condition)  VALUES('$full_name','$hos_id','$mail','$phone','$state','$city','$password','$tandc')";
        if (mysqli_query($conn, $query) or die(mysqli_error($conn))) {
            echo json_encode(array("status"=>true,'message'=>'registration successfull'));
            sendMail($mail,$subject,$body,$altBody);
        } else {
            echo json_encode(array("status" => false, 'message' => 'registration failed'));
        }
}
include "../config/db/close.php";
?>