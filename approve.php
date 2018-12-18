<?php

if (!session_id())session_start();

$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");


	
	
$result = $db->query("SELECT *FROM counter");

			while ($row = $result->fetch_assoc()):
			$value = $row['id'];
			$value = $value + 1;
			$db->query("UPDATE counter SET id = '$value'");
endwhile;


$user = "INHANS" . time();
$pass = "RURAL" . time();



	if (isset($_GET['delete'])) {	
		$id = $_GET['delete'];
		$db->query("DELETE FROM accounts WHERE id=$id");
	
		$_SESSION["message"] = "Application has been rejected!";
		$_SESSION["msg_type"] = "danger";
	
	}
		
	
	if (isset($_GET['pend'])) {
		$id = $_GET['pend'];
		$db->query("UPDATE accounts SET approval = 'NOT' WHERE id=$id");
	
		$_SESSION["message"] = "Application has been pended/ locked! Please contact Administrator!";
		$_SESSION["msg_type"] = "danger";
	
	}		

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$db->query("UPDATE accounts SET username = '$user', password = '$pass', approval = 'YES' WHERE id=$id");
	
		$_SESSION["message"] = "Application has been approved!";
		$_SESSION["msg_type"] = "info";

		$number = $_GET['number'];
		
		$db->query("INSERT INTO `ozekimessageout`(`id`, `sender`, `receiver`, `msg`, `senttime`, `receivedtime`, `reference`, `status`, `msgtype`, `operator`, `errormsg`) 
		VALUES (null,'SenderName','$number','Good day! Your Username is $user and password is $pass You may now log in!','','','','send','','','')");
	}
	
	

?>



