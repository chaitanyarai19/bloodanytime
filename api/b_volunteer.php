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
    
    $name = $data['name'];
    $phone = $data['phone'];
    $mail = $data['email'];
    $state = $data['state'];
    $city = $data['city'];
    $addhar = $data['addhar'];
    $dob = $data['dob'];
    
    $subject = 'Register as volunteer';
    $body = '<h4>Thank you '.$name.' for joining as a volunteer at Bloodanytime</h4>
            ';
    $altBody = 'Thank you '.$name.' for joining as a volunteer at Bloodanytime';
        $query = "INSERT INTO volunteer (name,email,phone,state,city,addhar,dob)  VALUES('$name','$mail','$phone','$state','$city','$addhar','$dob')";
        if (mysqli_query($conn, $query)) {
            echo json_encode(array("status"=>true,'message'=>'successful register for volunteer'));
            sendMail($mail,$subject,$body,$altBody);
        } else {
            echo json_encode(array("status" => false, 'message' => 'registration failed'));
        }
}
include "../config/db/close.php";
?>