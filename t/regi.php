<?php

$db = mysqli_connect('localhost', 'root','');

if (!$db){
	echo 'Not connected!';
}

if (!mysqli_select_db($db,'rural')) {
	echo 'Database not selected';
}

$firstname = $_POST['R_firstname'];
$middlename = $_POST['R_middlename'];
$lastname = $_POST['R_lastname'];
$baranggay = $_POST['R_baranggay'];
$number = $_POST['R_number'];
$position = $_POST['R_position'];
$approval = "NO";



$sql = "INSERT INTO accounts (Account_firstname, Account_middlename, Account_lastname,Baranggay,Number,Position,username,password,approval) VALUES ('$firstname', '$middlename', '$lastname', '$baranggay', '$number', '$position','$time','$time1','$approval')";
 



if (!mysqli_query($db,$sql)){
		echo 'Not inserted';
}


else
	$_SESSION['message'] = "Successfully registered!, Please contact admin to activate your account";
		$_SESSION["msg_type"] = "success";

	
	header("location: register1.php");
	

?>
