<?php
if (!session_id())session_start();

$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");
    header('Content-Type: application/json');

	if( isset($_POST['id']) ) {
		$post = $_POST;

		
		
		
		$db->query("INSERT INTO members (id,member_firstname,member_middlename,member_lastname,age,member_position, status,disable) 
		VALUES('".$post["id"]."','".$post["first_name"]."','".$post["middle_name"]."',
		'".$post["last_name"]."','".$post["age"]."','".$post["position"]."','".$post["status"]."','".$post["disability"]."') ");
		
	
		
		echo json_encode($post);
		
	}

?>