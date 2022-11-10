<?php
include 'dbconnect.php'; 
$nameEmptyErr = "";
$emailEmptyErr = "";
$mobnumEmptyErr = "";
$addressEmptyErr = "";
$name_Err = "";
$email_Err = "";
$mob_Err = "";
$errors = array();


if(isset($_POST["submit"])) {
    $name   = $_POST["name"];
    $email   = $_POST["email"];
    $mobilenumber  = $_POST["mobnumber"];
    $address   = $_POST["address"];
    $image = $_POST["image"];

    if(empty($name)){
        array_push($errors, $nameEmptyErr = '<div>Name can not be left blank.</div>');
    }
    else if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
        array_push($errors,$name_Err = '<div>Only letters and white space allowed.</div>');
	}
    if(empty($email)){
        array_push($errors, $emailEmptyErr = '<div>Email can not be left blank.</div>');
	}
    else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
        array_push($errors, $email_Err = '<div>Email format is not valid.</div>');
	}
    if(empty($mobilenumber)){
        array_push($errors, $mobnumEmptyErr = '<div>Please enter a mobile number.</div>');
	}elseif(!preg_match("/^[0-9]{10}+$/", $mobilenumber)){
		array_push($errors, $mob_Err = '<div> Please enter a valid mobile number.</div>');
    }
     if(empty($address)){
        array_push($errors, $addressEmptyErr = '<div>Please enter address.</div>');
    }if(count($errors) > 0) {
		foreach($errors as $val){
			echo $val .'<br>';
		}
    } else {
        $sql = "INSERT INTO client_form VALUES ('$name','$email','$mobilenumber','$address','$image')";
        mysqli_query($conn, $sql);
    }
	mysqli_close($conn);
}

	
?>