<html>
<body>



<form method="post">
	<table align="center">
		<tr>
			<td>Username :</td>
			<td><input type="text" name="username" placeholder="Username dito hehe"></td>
		</tr>
		<tr>
			<td>Hash :</td>
			<td><input type="text" name="hash" placeholder="Hash dito hehe"></td>
		</tr>
		<tr>
			<td>Sender :</td>
			<td><input type="text" name="sender" placeholder="sender dito hehe"></td>
		</tr>
		<tr>
			<td>Number :</td>
					<td><input type="text" name="number" placeholder="Number dito hehe"></td>
		</tr>
		<tr>
			<td>Message :</td>
		<td><textarea ="text" name="message" placeholder="message dito hehe"></textarea></td>
		</tr>
		<tr>
			<td> <input type="submit" name="send" value="SEND"/>
		</tr>
	</table>


</body>
</html>
<?php


if (isset($_POST['send'])) {

	$username = "kielmoralesoliva@gmail.com";
	$hash = "36492c7dd01907b632184852bdb2cb17bae53ae226a1e5d472ae03902209da47";


	$test = "0";

	$sender = "API Test"; 
	$numbers = "639666775314"; 
	$message = "Good day SPES applicant! You are now hired. Please report to your designated workplace! Goodluck!";
	
	
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); 
	curl_close($ch);
}
?>