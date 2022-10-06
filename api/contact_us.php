<?php
include "../config/db/connection.php";
$data = json_decode(file_get_contents("php://input"), true);
// print_r($data);
if (isset($data) && $data['your_name'] != '' && $data['email'] != '' && $data['phone'] != '' && $data['message'] != '') {
    $name = mysqli_real_escape_string($conn, $data['your_name']);
    $email = mysqli_real_escape_string($conn, $data['email']);
    $phone = mysqli_real_escape_string($conn, $data['phone']);
    $message = mysqli_real_escape_string($conn, $data['message']);
    $sql = "INSERT INTO contact_us (name, email, phone, message) VALUES ('$name', '$email','$phone', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="moto-widget-contact_form-success">Your message was sent successfully</div>';
    } else {
        echo '<div class="moto-widget-contact_form-danger">Sorry, your message was not sent</div>';
    }
}else{
    echo '<div class="moto-widget-contact_form-danger">All fields are required!</div>';
}
include "../config/db/close.php";
?>