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
$remarks ='';
$month = date("m");
	if (isset($_POST['save'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$age = $_POST['age'];
		$blood = $_POST['blood'];
		$pressure = $_POST['pressure'];
		$remarks= $_POST['remarks'];
		$brgy = $_POST['brgy'];

		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: index.php");
		
		$db->query("INSERT INTO nutrition (first_name,middle_name,last_name,age,
		blood,pressure,remarks,brgy,month) VALUES('$fname','$mname','$lname',
		'$age','$blood','$pressure','$remarks','$brgy','$month')");
	}



	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$db->query("DELETE FROM nutrition WHERE id=$id");
	
		$_SESSION["message"] = "Record has been deleted!";
		$_SESSION["msg_type"] = "danger";
	
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = $db->query("SELECT * FROM nutrition WHERE ID=$id") or die($db->error());
		
		if ($result->num_rows == 1){
			$row = $result->fetch_array();
			$fname = $row['first_name'];
			$mname = $row['middle_name'];
			$lname = $row['last_name'];
			$age = $row['age'];
			$blood = $row['blood'];
			$pressure = $row['pressure'];
			$remarks = $row['remarks'];
			$brgy = $row['brgy'];
		}
		
	}




?>



