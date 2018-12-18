<?php

if (!session_id())session_start();

$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");
$fname = '';
$mname ='';
$lname ='';
$age ='';
$date ='';
$redcough ='';
$remarks ='';
$month = date("m");

	if (isset($_POST['save'])){
		$fname = $_POST['fname7'];
		$mname = $_POST['mname7'];
		$lname = $_POST['lname7'];
		$animal = $_POST['animal'];
		$date = $_POST['date7'];
		$action= $_POST['action2'];
		$vaccine= $_POST['vaccine'];
		$brgy = $_POST['brgy3'];

		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: index.php");
		
	$db->query("INSERT INTO animal(first_name,middle_name,last_name,animal,
		date,action,vaccine,brgy,month) VALUES('$fname','$lname','$mname','$animal',
		'$date','$action','$vaccine','$brgy','$month')");
	}






	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$db->query("DELETE FROM animal WHERE id=$id");
	
		$_SESSION["message"] = "Record has been deleted!";
		$_SESSION["msg_type"] = "danger";
	
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = $db->query("SELECT * FROM animalWHERE ID=$id") or die($db->error());
		
		if (count($result)==1){	
			$row = $result->fetch_array();
			$fname = $row['first_name'];
			$mname = $row['middle_name'];
			$lname = $row['last_name'];
			$animal = $row['animal'];
			$date = $row['date'];
			$action = $row['action'];
			$breathing = $row['vaccine'];
			$brgy = $row['brgy'];
		}
		
	}




?>



