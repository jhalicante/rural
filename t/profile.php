<?php

$db = mysqli_connect('localhost', 'root','');

if (!$db){
	echo 'Not connected!';
}

if (!mysqli_select_db($db,'rural')) {
	echo 'Database not selected';
}

$brgy = $_POST['brgy'];
$A1 = $_POST['A1'];
$A2 = $_POST['A2'];
$AA1 = $_POST['AA1'];
$AA2 = $_POST['AA2'];
$AA3 = $_POST['AA3'];
$B1A = $_POST['B1A'];
$B1B = $_POST['B1B'];
$B1C = $_POST['B1C'];
$B1D = $_POST['B1D'];
$B1E = $_POST['B1E'];
$B2A = $_POST['B2A'];
$B2B = $_POST['B2B'];
$B2C = $_POST['B2C'];
$B2D = $_POST['B2D'];
$B2E = $_POST['B2E'];
$B3A = $_POST['B3A'];
$B3B = $_POST['B3B'];
$B3C = $_POST['B3C'];
$B3D = $_POST['B3D'];
$B3E = $_POST['B3E'];
$B3F = $_POST['B3F'];
$SA1 = $_POST['SA1'];
$SA2 = $_POST['SA2'];
$SA3 = $_POST['SA3'];
$SA4 = $_POST['SA4'];
$SB1 = $_POST['SB1'];
$SB2 = $_POST['SB2'];
$SB3 = $_POST['SB3'];
$SB4 = $_POST['SB4'];
$SB5 = $_POST['SB5'];
$SB6 = $_POST['SB6'];
$SC1 = $_POST['SC1'];
$SC2 = $_POST['SC2'];
$SC3 = $_POST['SC3'];
$SC4 = $_POST['SC4'];
$SC5 = $_POST['SC5'];
$SD1 = $_POST['SD1'];
$SD2 = $_POST['SD2'];
$SD3 = $_POST['SD3'];
$SE1 = $_POST['SE1'];
$SE2 = $_POST['SE2'];
$SF1 = $_POST['SF1'];
$SF2 = $_POST['SF2'];
$SG1 = $_POST['SG1'];
$SG2 = $_POST['SG2'];
$SG3 = $_POST['SG3'];
$SG4 = $_POST['SG4'];
$SH1 = $_POST['SH1'];
$SH2 = $_POST['SH2'];
$SH3 = $_POST['SH3'];
$SH4 = $_POST['SH4'];
$SH5 = $_POST['SH5'];
$SH6 = $_POST['SH6'];
$SI1 = $_POST['SI1'];
$SI2 = $_POST['SI2'];
$SI3 = $_POST['SI3'];
$SI4 = $_POST['SI4'];
$SJ1 = $_POST['SJ1'];
$SJ2 = $_POST['SJ2'];
$SJ3 = $_POST['SJ3'];
$SJ4 = $_POST['SJ4'];
$SJ5 = $_POST['SJ5'];
$SK1 = $_POST['SK1'];
$SK2 = $_POST['SK2'];
$SK3 = $_POST['SK3'];
$SK4 = $_POST['SK4'];
$sql = "INSERT INTO brgyprofile1(`Baranggay`, `A1`, `A2`, `AA1`, `AA2`, `AA3`, `B1A`, `B1B`, `B1C`, `B1D`, `B1E`, `B2A`, `B2B`, `B2C`, `B2D`, `B2E`, `B3A`, `B3B`, `B3C`, `B3D`, `B3E`, `B3F`) VALUES ('$brgy', '$A1', '$A2', '$AA1', '$AA2', '$AA3', '$B1A', '$B1B', '$B1C', '$B1D', '$B1E', '$B2A', '$B2B', '$B2C', '$B2D', '$B2E', '$B3A', '$B3B', '$B3C', '$B3D', '$B3E', '$B3F')";
$sql2 = "INSERT INTO brgyprofile2(`SA1`, `SA2`, `SA3`, `SA4`, `SB1`, `SB2`, `SB3`, `SB4`, `SB5`, `SB6`, `SC1`, `SC2`, `SC3`, `SC4`, `SC5`, `SD1`, `SD2`, `SD3`, `SE1`, `SE2`, `SF1`, `SF2`, `SG1`, `SG2`, `SG3`, `SG4`, `SH1`, `SH2`, `SH3`, `SH4`, `SH5`, `SH6`, `SI1`, `SI2`, `SI3`, `SI4`, `SJ1`, `SJ2`, `SJ3`, `SJ4`, `SJ5`, `SK1`, `SK2`, `SK3`, `SK4`) VALUES ('$SA1', '$SA2', '$SA3', '$SA4', '$SB1', '$SB2', '$SB3', '$SB4', '$SB5', '$SB6', '$SC1', '$SC2', '$SC3', '$SC4', '$SC5', '$SD1', '$SD2', '$SD3', '$SE1', '$SE2', '$SF1', '$SF2', '$SG1', '$SG2', '$SG3', '$SG4', '$SH1', '$SH2', '$SH3', '$SH4', '$SH5', '$SH6', '$SI1', '$SI2', '$SI3', '$SI4', '$SJ1', '$SJ2', '$SJ3', '$SJ4', '$SJ5', '$SK1', '$SK2', '$SK3', '$SK4')";



if (!mysqli_query($db,$sql)){
		echo 'Not inserted';
}
else
	$_SESSION['message'] = "Successfully registered!, Please contact admin to activate your account";
		$_SESSION["msg_type"] = "success";

	if (!mysqli_query($db,$sql2)){
		echo 'Not inserted';
}
	header("location: brgyprofile.php");
	

?>
