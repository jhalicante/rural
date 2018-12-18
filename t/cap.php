<?php
  //session_start();




$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);

$bg = $_POST['R_baranggay'];
$purok1 = $_POST['Purok1'];	
$purok2 = $_POST['Purok2'];
$purok3 = $_POST['Purok3'];
$purok4 = $_POST['Purok4'];
$purok5 = $_POST['Purok5'];
$purok6 = $_POST['Purok6'];
$purok7 = $_POST['Purok7'];

	if (isset($_POST['save'])) {
		
$result = $db->query("UPDATE accounts SET Purok1 = '$purok1',Purok2 = '$purok2',Purok3 = '$purok3',Purok4 = '$purok4',Purok5 = '$purok5',Purok6 = '$purok6',Purok7 = '$purok7' WHERE Baranggay='$bg'");

	}
	header("location: captain.php");


	
?>
