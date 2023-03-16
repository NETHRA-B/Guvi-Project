<?php
require 'vendor/autoload.php';
// $mongo = new MongoDB\Driver\Manager("mongodb://localhost:27017");
// echo "Conecntion to Database Succesfully";


$collection = (new MongoDB\Client)->ajax->ajax;


if (isset($_POST['action']) && $_POST['action'] == 'profileupdate') {
	//print_r($_POST);die;
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $instagram = $_POST['instagram'];
    $bio = $_POST['bio'];
    session_start();
    $email = $_SESSION["username"];
    $error_message = '';
    // $checkEmailQuery = $conn->prepare("select * from tbl_registration where email_id = ?");
    // $checkEmailQuery->bind_param("s", $email_id);
    // $checkEmailQuery->execute();
    
    //$result = $checkEmailQuery->get_result();
   $insertOneResult = $collection->insertOne([
	    'dob' => $dob,
	    'address' => $address,
	    'gender' => $gender,
	    'instagram' => $instagram,
	    'bio' => $bio,
	    'email' => $email,
	]);

        
        echo $error_message;
    }


?>