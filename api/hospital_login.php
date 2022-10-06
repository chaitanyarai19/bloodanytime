<?php
include "../config/db/connection.php";
session_start();
$data = json_decode(file_get_contents("php://input"), true);
$username = $data['username'];
$password = sha1($data['password']);
$sql = "SELECT hno,name,email,phone,hospital_id FROM hospital WHERE hospital_id = '{$username}' AND password = '{$password}'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION["hospital_id"] = $row['hospital_id'];
    $_SESSION["id"] = $row['hno'];
    $_SESSION['hospital_name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone'] = $row['phone'];
    echo json_encode(array("status" => true, "message" => "login successfully"));
} else {
    echo json_encode(array("status" => false, "message" => "Hospital id and Password are not matched."));
}
include "../config/db/close.php";
?>