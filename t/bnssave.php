<?php

if (!session_id())session_start();

$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");




	if (isset($_POST['save'])){
		$id= $_POST['id'];
		$baranggay = "WEW";
		$purok = $_POST['purok'];
		$family = $_POST['number_family'];
		$head_first = $_POST['H_firstname'];
		$head_middle = $_POST['H_middlename'];
		$head_last= $_POST['H_lastname'];
		$head_age = $_POST['H_age'];
		$dwell = $_POST['dwell'];
		$watersupply = $_POST['watersupply'];
		$electric = $_POST['electric'];
		$toilet = $_POST['toilet'];
		$garden = $_POST['garden'];
		
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION["msg_type"] = "success";
		
	
		
		$db->query("INSERT INTO bns (id,baranggay,bns_purok,no_of_family,
		head_firstname,head_middlename,head_lastname,head_age,dwelling_units,water_supply,electric_services,toilet,garden) VALUES('$id','$baranggay','$purok','$family','$head_first','$head_middle','$head_last','$head_age','$dwell','$watersupply','$electric','$toilet','$garden') ");
		
		
		
			header("location: bns.php");
		
		}
	
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		
		echo $id;
	
	}

