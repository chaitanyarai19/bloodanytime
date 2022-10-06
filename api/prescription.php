<?php
include "../config/db/connection.php";
include_once '../controllers/mail.php';
include_once '../config/api_url.php';
session_start();
$data = json_decode(file_get_contents("php://input"), true);

if (isset($_GET['type']) && $_GET['type'] == 'register'){
    if (!empty($_FILES["patient_prescription"]["name"])) {
        // Get file info 
        $hospital_id = $_SESSION['hospital_id'];
        $hospital_name = $_SESSION['hospital_name'];
        $patient_name = $_POST['patient_name'];
        $fileName = $_FILES["patient_prescription"]["name"];
        $tmpfile = $_FILES['patient_prescription']['tmp_name'];
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        date_default_timezone_set('Asia/Kolkata');
        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            $patient_prescription = "BAT_PP_FF_".date('Y_m_d_h_i_s')."". rand(1, 999999) . "." . $fileType;
            if (move_uploaded_file($tmpfile, "../src/upload/" . $patient_prescription)) {
                $sql = "INSERT INTO prescription (hospital_id,hospital_name, patient_name, patient_precription) VALUES ('$hospital_id','$hospital_name', '$patient_name','$patient_prescription')";
                if (mysqli_query($conn, $sql)) {
                    $_SESSION['prescription'] = mysqli_insert_id($conn);
                    echo json_encode(array("status" => true, "message" => "patient prescription successfully saved"));
                } else {
                    echo json_encode(array("status" => false, "message" => "sorry patient prescription failed".mysqli_error($conn)));
                    unlink('../src/upload/'.$patient_prescription);
                }
            } else {
                echo json_encode(array("status" => false, "message" => "failed to upload patient prescription"));
            }
        } else {
            echo json_encode(array("status" => false, "message" => "Sorry, only JPG, JPEG, PNG, & PDF files are allowed to upload."));
        }
    } else {
        echo json_encode(array("status" => false, "message" => "Please select an image file to upload."));
    }
}

include "../config/db/close.php";
