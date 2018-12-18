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
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$age = $_POST['age'];
		$disease = $_POST['disease'];
		$breathing = $_POST['breathing'];
		$action= $_POST['action'];
		$brgy = $_POST['brgy'];

		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: index.php");
		
		$db->query("INSERT INTO disease (first_name,middle_name,last_name,age,
		disease,breathing,action,brgy,month) VALUES('$fname','$mname','$lname',
		'$age','$disease','$breathing','$action','$brgy','$month')");
	}



	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$db->query("DELETE FROM disease WHERE id=$id");
	
		$_SESSION["message"] = "Record has been deleted!";
		$_SESSION["msg_type"] = "danger";
	
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = $db->query("SELECT * FROM disease WHERE ID=$id") or die($db->error());
		
		if ($result->num_rows == 1){
			$row = $result->fetch_array();
			$fname = $row['first_name'];
			$mname = $row['middle_name'];
			$lname = $row['last_name'];
			$age = $row['age'];
			$disease = $row['disease'];
			$breathing = $row['breathing'];
			$action = $row['action'];
			$brgy = $row['brgy'];
		}
		
	}




?>



