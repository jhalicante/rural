<?php

if (!session_id())session_start();

$user = 'root';
$pass = 'root';
$db ='rural';
$month = date("m");
$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");


	if (isset($_POST['save'])){
		$fname1 = $_POST['fname1'];
		$mname2 = $_POST['mname2'];
		$lname2 = $_POST['lname2'];
		$age2 = $_POST['age2'];
		$method2 = $_POST['method'];
		$date2 = $_POST['date2'];	
		$brgy2 = $_POST['brgy2'];
		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: index.php");
		
		$db->query("INSERT INTO diabetese (first_name,middle_name,last_name,age,
		method,date,brgy,month) VALUES('$fname1','$mname2','$lname2',
		'$age2','$method2','$date2','$brgy2','$month')");
	
	}


	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$db->query("DELETE FROM diabetese WHERE id=$id");
	
		$_SESSION["message"] = "Record has been deleted!";
		$_SESSION["msg_type"] = "danger";
	
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = $db->query("SELECT * FROM diabetese WHERE ID=$id") or die($db->error());
		
		if ($result->num_rows == 1){	
			$row = $result->fetch_array();
			$fname1 = $row['first_name'];
			$mname2 = $row['middle_name'];
			$lname2 = $row['last_name'];
			$age2 = $row['age'];
			$method2 = '';//$row['height'];
			$date2 = $row['date'];
			$brgy2 = $row['brgy'];
	
		}
		
	}




?>



