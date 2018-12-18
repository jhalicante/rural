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
		$fname = $_POST['fname3'];
		$lname = $_POST['lname3'];
		$date = $_POST['date'];
		$birth = $_POST['birth'];
		$taught = $_POST['taught'];	
		$finish = $_POST['finish'];	
		$brgy3 = $_POST['brgy3'];
		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
		header("location: index.php");
		
		$db->query("INSERT INTO breastexam(first_name,last_name,date,
		birth,taught,finish,brgy,month) VALUES('$fname','$lname','$date',
		'$birth','$taught','$finish','$brgy3','$month')");
	}


	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$db->query("DELETE FROM breastexam WHERE id=$id");
	
		$_SESSION["message"] = "Record has been deleted!";
		$_SESSION["msg_type"] = "danger";
	
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = $db->query("SELECT * FROM breastexam WHERE ID=$id") or die($db->error());
		
		if ($result->num_rows == 1){
			$row = $result->fetch_array();
			$fname = $row['first_name'];
			$lname = $row['last_name'];
			$date = $row['date'];
			$birth = $row['birth'];
			$taught= $row['taught'];
			$finish= $row['finish'];
		//	$brgy = $row['brgy'];
	
		}
		
	}




?>



