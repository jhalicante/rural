<?php

//session_start();

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

	if (isset($_POST['save'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$age = $_POST['age'];
		$height = $_POST['height'];
		$weight = $_POST['weight'];
		$bmi = $_POST['bmi'];
		$status = $_POST['status'];
		$waist= $_POST['waist'];
		$WHR = $_POST['whr'];		
		$brgy = $_POST['brgy'];
		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: index.php");
		
		$db->query("INSERT INTO bhw (first_name,middle_name,last_name,age,
		height,weight,bmi,status,waist,whr,brgy) VALUES('$fname','$mname','$lname',
		'$age','$height','$weight','$bmi','$status','$waist','$WHR','$brgy')");
	}



	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$db->query("DELETE FROM bhw WHERE id=$id");
	
		$_SESSION["message"] = "Record has been deleted!";
		$_SESSION["msg_type"] = "danger";
	
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = $db->query("SELECT * FROM bhw WHERE ID=$id") or die($db->error());
		
		if ($result->num_rows == 1){
			$row = $result->fetch_array();
			$fname = $row['first_name'];
			$mname = $row['middle_name'];
			$lname = $row['last_name'];
			$age = $row['age'];
			$height = $row['height'];
			$weight = $row['weight'];
			$bmi = $row['bmi'];
			$status = $row['status'];
			$bmi = $row['waist'];
			$status = $row['whr'];
			$brgy = $row['brgy'];
		}
		
	}




?>



