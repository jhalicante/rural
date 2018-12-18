<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username1 = $_POST['loguser'];
$password1 = $_POST['logpass'];

$approval1 = "YES";
$result = $db->query("SELECT*FROM accounts");



			
$result = $db->query("select * from accounts where username='$username1' and password='$password1' and approval='$approval1' ");
if ($result->num_rows > 0) {
	$row = $result ->fetch_assoc();	

	$position  = $row['Position'];
	$brgy  = $row['Baranggay'];	
	$purok  = $row['Purok1'];
	$user_id = $row['id'];
	
	$cookie_name = "user_position";
	$cookie_value = $position;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	
	$cookie_name = "user_brgy";
	$cookie_value = $brgy;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

	$cookie_name = "user_purok";
	$cookie_value = $purok;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

	$cookie_name = "user_id";
	$cookie_value = $user_id;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	
	if ($position == "BNS") {
		header("location: bns.php");
	}
	else if ($position == "BHW") {	
		header("location: index.php");
	}
	else if ($position == "Admin") {	
		header("location: admin.php");
	}	
	else if ($position == "Captain") {
		header("location: captain.php");
	}	
	

} 









else {
header("location: register1.php?error=1");
}

$db->close();




?>