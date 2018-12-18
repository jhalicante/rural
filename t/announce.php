<?php

$db = mysqli_connect('localhost', 'root','');

if (!$db){
	echo 'Not connected!';
}

if (!mysqli_select_db($db,'rural')) {
	echo 'Database not selected';
}
	if (isset($_POST['save1'])) {
$title1= $_POST['a1_title'];
$announce1 = $_POST['a1_content'];
$sql = "UPDATE announcement SET title1 = '$title1', announcement1 = '$announce1' WHERE id=1";	
	}
	if (isset($_POST['save2'])) {
$title1= $_POST['a2_title'];
$announce1 = $_POST['a2_content'];
$sql = "UPDATE announcement SET title2 = '$title1', announcement2 = '$announce1' WHERE id=1";	
	}
	if (isset($_POST['save3'])) {
$title1= $_POST['a3_title'];
$announce1 = $_POST['a3_content'];
$sql = "UPDATE announcement SET title3 = '$title1', announcement3 = '$announce1' WHERE id=1";	
	}
		if (isset($_POST['save4'])) {
$title1= $_POST['a4_title'];
$announce1 = $_POST['a4_content'];
$sql = "UPDATE announcement SET title4 = '$title1', announcement4 = '$announce1' WHERE id=1";	
	}
	if (isset($_POST['save5'])) {
$title1= $_POST['a5_title'];
$announce1 = $_POST['a5_content'];
$sql = "UPDATE announcement SET title5 = '$title1', announcement5 = '$announce1' WHERE id=1";	
	}
	
if (!mysqli_query($db,$sql)){
		echo 'Not inserted';
}
else
	$_SESSION['message'] = "Successfully registered!, Please contact admin to activate your account";
		$_SESSION["msg_type"] = "success";
	
	move_uploaded_file($_FILES['image']['temp_name'],"pictures/$img");
	header("location: admin.php");
	

?>
