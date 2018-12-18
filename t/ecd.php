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
		$fname = $_POST['fname8'];
		$mname = $_POST['mname8'];
		$lname = $_POST['lname8'];
		$date = $_POST['date8'];
		$brgy = $_POST['brgy4'];

		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: index.php");
		
	$db->query("INSERT INTO ecd(first_name,middle_name,last_name,
		date,brgy,month) VALUES('$fname','$lname','$mname',
		'$date','$brgy','$month')");
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
		
		if ($result->num_rows == 1){
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



