<?php

if (!session_id())session_start();

$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");


	if (isset($_POST['register_btn'])){
		$firstname = $_POST['account_firstname'];
		$middlename = $_POST['account_middlename'];
		$lastname = $_POST['account_lastname'];
		$brgy = $_POST['baranggay'];		
		$number = $_POST['number'];		
		$position = $_POST['position'];		
		$username = $_POST['username'];
		$password = $_POST['password'];		
		$approval = "not";
		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: register1.php");
		
		$db->query("INSERT INTO accounts(Account_firstname,Account_middlename,Account_lastname,
		Baranggay,Number,Position,username,password,approval) VALUES('$firstname','$middlename','$lastname',
		'$brgy','$number','$position','$username','$password','$approval')");
	}


?>



