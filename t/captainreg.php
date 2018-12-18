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
$POS = $_POST['Rpos'];
$username = $_POST['R_username'];
$password = $_POST['R_password'];
$approval = "YES";
$purok = $_POST['R_purok'];


$sql = "INSERT INTO accounts (Account_firstname, Account_middlename, Account_lastname,Baranggay,Number,Position,username,password,approval,Purok1) VALUES ('$firstname', '$middlename', '$lastname', '$baranggay', '$number', '$POS','$username','$password','$approval','$purok')";
 



if (!mysqli_query($db,$sql)){
		echo 'Not inserted';
}
else
	$_SESSION['message'] = "Successfully registered!, Please contact admin to activate your account";
		$_SESSION["msg_type"] = "success";

	
	header("location: captain.php");
	

?>
