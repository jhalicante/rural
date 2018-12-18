<?php

// if (!session_id())session_start();

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
$remarks2 ='';
$month = date("m");
	if (isset($_POST['save'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$age = $_POST['age'];
		$date = $_POST['date'];	
		$remarks2 = $_POST['remarks2'];	
		$brgy = $_POST['brgy'];
		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: index.php");
		
		$db->query("INSERT INTO redcough(first_name,middle_name,last_name,age,
		date,remarks,brgy,month) VALUES('$fname','$mname','$lname',
		'$age','$date','$remarks2','$brgy','$month')");
	}


	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$db->query("DELETE FROM redcough WHERE id=$id");
	
		$_SESSION["message"] = "Record has been deleted!";
		$_SESSION["msg_type"] = "danger";
	
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = $db->query("SELECT * FROM redcough WHERE ID=$id") or die($db->error());
		
		if ($result->num_rows == 1){
			$row = $result->fetch_array();
			$fname = $row['first_name'];
			$mname = $row['middle_name'];
			$lname = $row['last_name'];
			$age = $row['age'];
			$date = $row['date'];
			$remarks2= $row['remarks2'];
		//	$brgy = $row['brgy'];
	
		}
		
	}




?>



