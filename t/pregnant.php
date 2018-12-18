<?php

if (!session_id())session_start();

$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");

$month = date("m");

	if (isset($_POST['PS_submit'])){
		$id= $_POST['PS_id'];
		$firstname= $_POST['P_firstname'];
		$middlename= $_POST['P_middlename'];
		$lastname = $_POST['P_lastname'];
		$age= $_POST['P_age'];
		$status= $_POST['P_status'];
				$db->query("UPDATE members SET member_firstname = '$firstname',member_middlename = '$middlename',member_lastname = '$lastname', age = '$age', status = '$status' WHERE serial=$id");
		$_SESSION["message"] = "Application has been approved!";
		$_SESSION["msg_type"] = "success";

			header("location: bns.php");
		}
	if (isset($_POST['D_submit'])){
		$id= $_POST['PS_id'];
		$firstname= $_POST['P_firstname'];
		$middlename= $_POST['P_middlename'];
		$lastname = $_POST['P_lastname'];
		$age= $_POST['P_age'];
		$status= $_POST['P_status'];
		$disability= $_POST['disability'];
		$disable= $_POST['disable'];
				$db->query("UPDATE members SET disable= '$disable', member_firstname = '$firstname',member_middlename = '$middlename',member_lastname = '$lastname', age = '$age', status = '$status', disability = '$disability	' WHERE serial=$id");
		$_SESSION["message"] = "Application has been approved!";
		$_SESSION["msg_type"] = "success";

			header("location: bns.php");
		}	


