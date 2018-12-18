<?php

if (!session_id())session_start();

$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");



	if (isset($_POST['PS_submit'])){
		$id= $_POST['PS_id'];
		$age= $_POST['PS_age'];
		$weight= $_POST['PS_weight'];
		$height= $_POST['PS_height'];
		$status= $_POST['PS_status'];
		$date= $_POST['PS_date'];

	
			
				$db->query("UPDATE members SET age = '$age',weight = '$weight',height = '$height',weightstatus = '$status', dateweight = '$date' WHERE serial=$id");
			
		$_SESSION["message"] = "Application has been approved!";
		$_SESSION["msg_type"] = "success";
	
		
		
		
			header("location: bns.php");
		
		}
	


