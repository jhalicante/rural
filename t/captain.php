<?php
if(isset($_POST['changepassword'])) {
	
	$user = 'root';
	$pass = 'root';
	$db ='rural';	
	$db = new mysqli('localhost', $user,$pass,$db);

	$user_id = $_COOKIE['user_id'];

	$db->query("UPDATE `accounts` SET `password`='".$_POST['password']."' WHERE id='".$user_id."' ");
}


?>
<html>
<head></head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css"/>
  
 
<body>

<div class="container">
  <img src="images/Image.png" height="15%" style="position:absolute;"/><h2 style="position:absolute; left: 17%; top:0; font-family:calibri; font-size:300%;"> Rural Health and Nutrition Information System</h2>
<br><br><br><br><br><br><br><br>

    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#register">Register</a></li>
    <li><a data-toggle="tab" href="#changepassword">Change Password</a></li>
	<a href="register1.php">
	<button type="submit" style="position:relative; left:58.5%" name="save" class="btn btn-primary"> Log Out</button> 
		</a>
		
 </ul>  


  <div class="tab-content">
  
	<div id="changepassword" class="tab-pane fade in">
		<div class="col-sm-"></div>
		<h3> Change Password </h3>
		<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="col-sm-4">
				<div class="form-group" autocomplete="off">
					New Password:
					<input type="text" name="password" autocomplete="off" class="form-control"><br>
					Current Password:
					<input type="password" autocomplete="off" name="password" class="form-control">
				</div>
				<br>
				<div class="form-group"> 
					<button type="submit" name="changepassword" class="btn btn-primary"> Submit</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
				</div>
			</div>
		</form> 
	</div>

    <div id="home" class="tab-pane fade in active">
	
	<div class="row"><div class="col-sm-6">
	<h3><strong>Purok List</h3></strong>
	
	<form action ="cap.php" method="post">
			
				  

						<?php 
						if( isset($_COOKIE['user_brgy']) ) {
							echo '<input type="text" name="R_baranggay" class="form-control" value="'.$_COOKIE['user_brgy'].'">';
						} 
						?>
						<br>
	  <table class="table table-condensed table-bordered table-hover table-striped">
	  <tr><th>Purok 1:</th><th>
	<input type="text" name="Purok1" class="form-control"></th>
	<tr><th>Purok 2:</th><th>
	<input type="text" name="Purok2" class="form-control"></th>
	 <tr><th>Purok 3:</th><th>
	<input type="text" name="Purok3" class="form-control"></th>
	<tr><th>Purok 4:</th><th>
	<input type="text" name="Purok4" class="form-control"></th>
	<tr><th>Purok 5:</th><th>
	<input type="text" name="Purok5" class="form-control"></th>
	<tr><th>Purok 6:</th><th>
	<input type="text" name="Purok6" class="form-control"></th>
	<tr><th>Purok 7:</th><th>
	<input type="text" name="Purok7" class="form-control"></th>
	<th><button type="submit" name="save" class="btn btn-warning"> Insert</button></th>
</table>


</form>

</div>
	 </div>
	  </div>
	  
	  
	  
    <div id="register" class="tab-pane fade">

     
	  <div class="col-sm-"></div>
	  <div class="col-sm-6">
	   <h3>Register Account</h3>
	<form action ="captainreg.php" method="post">
	
	<div class="form-group">	
	First Name: 
	<input type="text" name="R_firstname" class="form-control">
	Middle Name: 
	<input type="text" name="R_middlename" class="form-control">
	Last Name: 
	<input type="text" name="R_lastname" class="form-control">
  <div class="form-group">
   Baranggay: 
		<?php 
						if( isset($_COOKIE['user_brgy']) ) {
							echo '<input type="text" name="R_baranggay" class="form-control" value="'.$_COOKIE['user_brgy'].'">';
						} 
						?>
						
	Number: 
	<input type="text" name="R_number" class="form-control">	
	
	
   Position: 
	<select name="Rpos" placeholder="Select Position" class="form-control">
	 <option class="form-control" value="" disabled selected hidden>Select Position</option>
						 		<option value="BNS">BNS</option>
				        <option value="BHW">BHW</option>						
						</select><br>
Username: 
	<input type="text" name="R_username" class="form-control">
Password: 
	<input type="text" name="R_password" class="form-control">	
  <?php
$user = 'root';
$pass = 'root';
$db ='rural';
$bg = $_COOKIE['user_brgy'];
$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM accounts where Baranggay='$bg'");


//pre_r($result);
?>

  Designate to Purok: 
		<select name="R_purok" placeholder="Designate to Purok" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Position</option>
					<?php
			while ($row = $result->fetch_assoc()) {?>	
			
						<option value="<?php echo $row['Purok1']?>"><?php echo $row['Purok1']?></option>
				        <option value="<?php echo $row['Purok2']?>"><?php echo $row['Purok2']?></option>	
						<option value="<?php echo $row['Purok3']?>"><?php echo $row['Purok3']?></option>
						<option value="<?php echo $row['Purok4']?>"><?php echo $row['Purok4']?></option>
						<option value="<?php echo $row['Purok5']?>"><?php echo $row['Purok5']?></option>
						<option value="<?php echo $row['Purok6']?>"><?php echo $row['Purok6']?></option>
						<option value="<?php echo $row['Purok7']?>"><?php echo $row['Purok7']?></option>						
							<?php } ?></select><br>
		


	
   </div>  
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
		</div>
	</form>

	
	</div>
	</div>
</div>


</body>
</html>
