<?php
include "../config/db/connection.php";
include_once '../controllers/mail.php';
include_once '../config/api_url.php';
session_start();
$data = json_decode(file_get_contents("php://input"), true);

/*if (isset($_GET['type']) && $_GET['type'] == 'send-otp') {
    $email = $data['email'];
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;
    $subject = 'One Time Password (OTP)';
    $body = '<h4>Bloodandytime sent you OTP</h4>
            <p>OTP code is : ' . $otp . '</p>
            <p>have a nice day</p>';
    $altBody = 'Bloodanytime sent you OTP. OTP code is : ' . $otp . '';
    echo sendMail($email, $subject, $body, $altBody);
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
}*/


if (isset($_GET['type']) && $_GET['type'] == 'register') {
    if (isset($data) && $data['name'] != '' && $data['phone'] != '' && $data['state'] != '' && $data['city'] != '' && $data['password'] != '') {
        $name = mysqli_real_escape_string($conn, $data['name']);
        $email = isset($data['email']) ? mysqli_real_escape_string($conn, $data['email']):"";
        $phone = mysqli_real_escape_string($conn, $data['phone']);
        $blood_group = mysqli_real_escape_string($conn, $data['blood_group']);
        $city = mysqli_real_escape_string($conn, $data['city']);
        $state = mysqli_real_escape_string($conn, $data['state']);
        $address = isset($data['address']) ? mysqli_real_escape_string($conn, $data['address']) : "";
        $pass =   mysqli_real_escape_string($conn,$data['password']);
        $password = mysqli_real_escape_string($conn, base64_encode($data['password']));
        
        /*$fields = array( 
            "sender_id" => "Bloodanytime",
            "message" => 'Thank you for donating Blood in Gyan Ganga Blood Donation Camp!

We are happy to save your information for future reference!

Your blood group is "'.$blood_group.'" Stay healthy, stay safe.

You can also check & update your details 
https://bloodanytime.com/donor
username - '.$phone.'
password - '.$pass.'',
            "language" => "english",
            "route" => "q",
            "numbers" => "$phone",
        	//"variables" => "{#FF#}|{#BB#}|{#DD#}",
        	//"variables_values" => "Bloodanytime",
        );
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($fields),
          CURLOPT_HTTPHEADER => array(
            "authorization: dYhAJfgvelmRQq3wINaFjGHD5EzZXyP2rLVsW87KCiOknt0TxBTrymoghbOsRYxdfj2Xzqan07NWBS8k",*/
            //"accept: */*",
            /*"cache-control: no-cache",
            "content-type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }*/
        
        
        $subject = 'Registered';
        $body = '<h4>Thanks for Registering at Bloodanytime</h4>
            <p>Hi ' . $name . ',</p>
            <p>Thank you for registered as donor at Bloodanytime. Your acoount details are as follows:</p>
            <p><b>Username</b> : ' . $email . '</p>
            <p><b>Password</b> : ' . $data['password'] . '</p>
           ';
        //     <p>To sign in to your account, please visit <a href="' . $url . 'hospital_login.php">' . $url . 'hospital_login.php</a></p>
        //$altBody = 'Thanks for Registering at Bloodanytime. Hi ' . $name . ', Thank you for registered as donor at Bloodanytime. Your account details are as follows: Username : ' . $email . ', Password : ' . $data['password'] . '';
        $sql = "INSERT INTO blood (name, email, phone, blood_group, city, state, address, password) VALUES ('$name', '$email','$phone', '$blood_group', '$city','$state', '$address', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo '<div class="moto-widget-contact_form-success">You are successfully Registered</div>';
            //if(isset($data['email']))
               // sendMail($email, $subject, $body, $altBody);
        } else {
            echo '<div class="moto-widget-contact_form-danger"> Sorry, you are not registered</div>';
        }
    } else {
        echo '<div class="moto-widget-contact_form-danger">All fields are required!</div>';
    }
}

include "../config/db/close.php";
?>