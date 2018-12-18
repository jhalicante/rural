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
$remarks2 ='';
$month = date("m");
	if (isset($_POST['save'])){
		
		$ffname = $_POST['ffname'];
		$flname = $_POST['flname'];
		$fatherage = $_POST['fatherage'];
		$mfname = $_POST['mfname'];
		$mlname = $_POST['mlname'];
		$motherage = $_POST['motherage'];		
		$status = $_POST['status'];	
		$method = $_POST['method'];	
		$brgy3 = $_POST['brgy3'];
		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: index.php");
		
		$db->query("INSERT INTO family(fatherfirstname,fathersurname,fatherage,
		motherfirstname,mothersurname,motherage,status,method,brgy,month) VALUES('$ffname','$flname','$fatherage',
		'$mfname','$mlname','$motherage','$status','$method','$brgy3','$month')");
	}


	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$db->query("DELETE FROM family WHERE id=$id");
	
		$_SESSION["message"] = "Record has been deleted!";
		$_SESSION["msg_type"] = "danger";
	
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = $db->query("SELECT * FROM family WHERE ID=$id") or die($db->error());
		
		if ($result->num_rows == 1){
			$row = $result->fetch_array();
			$ffname = $row['fathersurname'];
			$flname = $row['fatherlastname'];
			$fatherage = $row['fatherage'];
			$mfname = $row['mothersurname'];
			$mlname = $row['motherlastname'];
			$motherage = $row['motherage'];
			$status= $row['status'];
			$method= $row['method'];
			$brgy3= $row['brgy'];
		//	$brgy = $row['brgy'];
	
		}
		
	}




?>



