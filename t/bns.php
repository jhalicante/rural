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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="css/style.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<body>

<?php 

	// function activeTab() {
	// 	if( isset($_GET['active-tab']) ) {
	// 		echo "<script>$('.bns-tabs ul li a').click();</script>";
	// 	}
	// }
?>

<div class="container">
  <img src="images/Image.png" height="15%" style="position:absolute;"/><h2 style="position:absolute; left: 17%; top:0; font-family:calibri; font-size:300%;">Rural Health and Nutrition Information System</h2>
<br><br><br><br><br><br><br><br>

    <ul class="nav nav-tabs bns-tabs">
<li class="active"><a data-toggle="tab" style="color:red;"><strong>You logged in as : BNS USER</strong></a></li>
    <li class="active"><a data-toggle="tab" href="#home">Households</a></li>
 <li><a data-toggle="tab" href="#addhousehold">Add Household</a></li>   
 <li><a data-toggle="tab" href="#schoolers">Pre-Schoolers</a></li>   
  <li><a data-toggle="tab" href="#schoolers2">Schoolers</a></li>  
   <li><a data-toggle="tab" href="#pregnant">Pregnant</a></li>  
   <li><a data-toggle="tab" href="#lactating">Lactating</a></li>     
    <li><a data-toggle="tab" href="#disability">With Disability</a></li> 
	<li><a data-toggle="tab" a href="#disability">With Disability</a></li> 
	<li><a data-toggle="tab" a href="#changepassword">Change Password</a></li> 
   
	<a href="register1.php"	>
	<button type="submit" style="position:relative; " name="save" class="btn btn-primary"> Log Out</button> 
		</a>	
 </ul>	
     <ul class="nav nav-tabs">

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

	
	<h3> List of Households > Barangay: <?php echo $_COOKIE['user_brgy']; ?></h3>
  <?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM bns");


//pre_r($result);
?>

	<div class="col-sm-13">




<br>

	<table class="table">
		<thead>
			<th>FirstName</th>
			<th>MiddleName</th>
			<th>LastName</th>
			<th>Age</th>
			<th>Families</th>
			<th>Dwelling</th>
			<th>Water Supply</th>
			<th>Electricity</th>
			<th>Toilet</th>
			<th>Garden</th>
			<th>Purok</th>
			<th> Action </th>
			</tr>
			</thead>
			
			
			

			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['head_firstname']?></td>
				<td> <?php echo $row['head_middlename']?></td>
				<td> <?php echo $row['head_lastname']?></td>
				<td> <?php echo $row['head_age']?></td>
				<td> <?php echo $row['no_of_family']?></td>
				<td> <?php echo $row['dwelling_units']?></td>
				<td> <?php echo $row['water_supply']?></td>
				<td> <?php echo $row['electric_services']?></td>
				<td> <?php echo $row['toilet']?></td>
				<td> <?php echo $row['garden']?></td>
				<td> <?php echo $row['bns_purok']?></td>	
<td>
				<a href="admin.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info" href="#menu1">View Details</a>
				
				
	
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
  
</div>
<br>


	 
	 
	 
	  </div>
	  
    <div id="addhousehold" class="tab-pane fade">
	 <h3>Add Household > Barangay : <?php echo $_COOKIE['user_brgy'];?></h3>
     
	  <div class="col-sm-3">
	<p> Database ID </p>
  <?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM counter");


//pre_r($result);
?>
	<?php
	

			while ($row = $result->fetch_assoc()):
			$value = $row['id'];
			$value = $value + 1;
			$db->query("UPDATE counter SET id = '$value'");
			?>
			

				<?php endwhile; ?>	


	
	<form action ="bnssave.php" method="post">
	 
	<div class="form-group">
	<input type="text" name="id" class="form-control" value=<?php echo $value?>><br>	
	
	
				
	Purok Name :
	<input type="text" name ="purok"  list ="puroklist"class="form-control" placeholder="Select your Purok">
	<datalist id="puroklist">
						<option value="Purok 1">Purok 1</option>
				        <option value="Purok 2">Purok 2</option>
				        <option value="Purok 3">Purok 3</option>
				        <option value="Purok 4">Purok 4</option>
				        <option value="Purok 5">Purok 5</option>
				        <option value="Purok 6">Purok 6</option>
				        <option value="Purok 7">Purok 7</option>
	</datalist>
		<br>Number of Family :
	<input type="text" name="number_family" placeholder="Number of Family" class="form-control"><br>
	<strong>Head of Household: </strong> <br>First Name :
	<input type="text" name="H_firstname" placeholder="First Name" class="form-control"> 
		<br>Middle Name :
	<input type="text" name="H_middlename" placeholder="Middle Name"class="form-control">
		<br>Last Name :
	<input type="text" name="H_lastname" placeholder="Last Name"class="form-control">	
		<br>Age: 
	<input type="text" name="H_age" placeholder="Age" class="form-control">	<br>


 
 
 
	<br>

	<strong>Household Information:</strong> <br>
	Type of Dwelling Units:
	<input type="text" name ="dwell"  list ="dwelllist"class="form-control" placeholder="Dwelling units">
	<datalist id="dwelllist">
						<option value="Concrete">Concrete</option>
				        <option value="Semi-Concrete">Semi-Concrete</option>
				        <option value="Nipa/Bamboo">Nipa/Bamboo</option>
				        <option value="Wood">Wood</option>
				        <option value="Barong-barong">Barong-barong</option>				
	</datalist>	
	<br>
		Some of Water Supply:
	<input type="text" name ="watersupply"  list ="waterlist"class="form-control" placeholder="Water supply">
	<datalist id="waterlist">
						<option value="Open Dug Well">Open Dug Well</option>
				        <option value="Spring">Spring</option>
				        <option value="Artezian Well">Artezian Well</option>
				        <option value="Deep Well">Deep Well</option>
				        <option value="Waterwork System">Waterwork System</option>				
	</datalist>
	<br>
		Electricity and Cellphone Services:
	<input type="text" name ="electric"  list ="electriclist" class="form-control" placeholder="Electricity Supply">
	<datalist id="electriclist">
						<option value="Electricity">Electricity</option>
				        <option value="Telephone">Telephone</option>
				        <option value="Cellphone">Cellphone</option>
					
	</datalist>	
		<br>
		Type of toilet Facilities:
	<input type="text" name ="toilet"  list ="toiletlist" class="form-control" placeholder="Toilet Facilities">
	<datalist id="toiletlist">
						<option value="Water sealed bowl">Water sealed bowl</option>
				        <option value="Artificial">Artificial</option>
				        <option value="Open Pit">Open Pit</option>
				        <option value="None">None</option>			
	</datalist>	
		<br>
		Do you have Home Garden?
	<input type="text" name ="garden"  list ="gardenlist" class="form-control" placeholder="Garden">
	<datalist id="gardenlist">
						<option value="Yes">Yes</option>
				        <option value="No">No</option>	
	</datalist>		

</div>


	

	<strong>Add Members of Household:</strong> 
	    <div class="container">
   <br />

   
   <div align="right" style="margin-bottom:5px;">
    <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
   </div>
   <br/>
    <div class="table-responsive">
     <table class="table" id="user_data">
      <tr>	
       <th>First Name</th>
	   <th>Middle Name</th>
       <th>Last Name</th>
       <th>Age</th>
        <th>Position</th>  
		 <th>Status</th>  
		 <th>Disability</th>  
       <th>Remove</th>
      </tr>
     </table>
    </div>


   <br />
  </div>

 
 
 
	<br><br>


	





	<br>
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
		</div>
	</form>
	</div>
	</div>
	
  <div id="schoolers" class="tab-pane fade">
	 <h3>Update Pre-schooler details > Barangay : <?php echo $_COOKIE['user_brgy'];?> </h3>
<form action="schoolupdate.php" method="post">
<table class="table" id="PS_table" style="font-size: 13.5px;">
		<thead>
			<th>ID <input type="text" id="PS_id" name="PS_id"  class="form-control"/></th>
			<th>First Name <input type="text" id="PS_fname" class="form-control"/></th>
			<th>Age <input type="text" id="PS_age" name="PS_age" class="form-control"/></th>
			<th>Weight <input type="text" id="PS_weight" name="PS_weight" class="form-control"/></th>	
			<th>Height <input type="text" id="PS_height" name="PS_height" class="form-control"/></th>
			<th><label>Status</label>
				<select id="PS_status" name ="PS_status" placeholder="Select Role" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Role</option>
						<option value="Underweight">Underweight</option>
				        <option value="Obese">Obese</option>
						</select></th>
			<th>Date Weighted <input type="text" id="PS_date" name="PS_date"  class="form-control"/></th>
			<th><button type="submit" name="PS_submit" class="btn btn-warning">UPDATE PRE-SCHOOL DETAILS</button></th>
</thead>
</table>
</form>
  <?php
$user = 'root';
$pass = 'root';
$db ='rural';
$db = new mysqli('localhost', $user,$pass,$db);

	$result = $db->query("SELECT *FROM members where status='Preschool'");


?><br>
<table class="table" id="PS_table" style="font-size: 13.5px;">
		<thead>
			<th>ID</th>	
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Status</th>
			<th>Weight</th>
			<th>Height</th>
			<th>Weight Status</th>
			<th>Date Weighted</th>
			</tr>
			</thead>
			
						<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['serial']?></td>
				<td> <?php echo $row['member_firstname']?></td>
				<td> <?php echo $row['member_middlename']?></td>
				<td> <?php echo $row['member_lastname']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['status']?></td>
				<td> <?php echo $row['weight']?></td>
				<td> <?php echo $row['height']?></td>
				<td> <?php echo $row['weightstatus']?></td>
				<td> <?php echo $row['dateweight']?></td>
				
<td>
			
				
				
	
				
				</td>
				</tr>
				
				<?php endwhile; ?>
			
</table>
</div>

 <div id="schoolers2" class="tab-pane fade">
	 <h3>Update Schooler details Barangay : <?php echo $_COOKIE['user_brgy'];?></h3>
<form action="schoolupdate.php" method="post">
<table class="table" id="PS_table2" style="font-size: 13.5px;">
		<thead>
			<th>ID <input type="text" id="PS_id2" name="PS_id"  class="form-control"/></th>
			<th>First Name <input type="text" id="PS_fname2" class="form-control"/></th>
			<th>Age <input type="text" id="PS_age2" name="PS_age" class="form-control"/></th>	
			<th>Weight <input type="text" id="PS_weight2" name="PS_weight" class="form-control"/></th>	
			<th>Height <input type="text" id="PS_height2" name="PS_height" class="form-control"/></th>
			<th><label>Status</label>
				<select id="PS_status2" name="PS_status" placeholder="Select Role" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Role</option>
						<option value="Underweight">Underweight</option>
				        <option value="Obese">Obese</option>
						</select></th>
			<th>Date Weighted <input type="text" id="PS_date2" name="PS_date"  class="form-control"/></th>
			<th><button type="submit" name="PS_submit" class="btn btn-warning">UPDATE SCHOOLER DETAILS</button></th>
</thead>
</table>
</form>

  <?php
$user = 'root';
$pass = 'root';
$db ='rural';
$db = new mysqli('localhost', $user,$pass,$db);

	$result = $db->query("SELECT *FROM members where status='School'");


?><br>
<table class="table" id="PS_table2" style="font-size: 13.5px;">
		<thead>
			<th>ID</th>	
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Status</th>
			<th>Weight</th>
			<th>Height</th>
			<th>Weight Status</th>
			<th>Date Weighted</th>
			</tr>
			</thead>
			
						<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['serial']?></td>
				<td> <?php echo $row['member_firstname']?></td>
				<td> <?php echo $row['member_middlename']?></td>
				<td> <?php echo $row['member_lastname']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['status']?></td>
				<td> <?php echo $row['weight']?></td>
				<td> <?php echo $row['height']?></td>
				<td> <?php echo $row['weightstatus']?></td>
				<td> <?php echo $row['dateweight']?></td>
				
<td>
			
				
				
	
				
				</td>
				</tr>
				
				<?php endwhile; ?>
			
</table>
</div>







 <div id="pregnant" class="tab-pane fade">
	 <h3>Update Pregnant Details Barangay : <?php echo $_COOKIE['user_brgy'];?></h3>
<form action="pregnant.php" method="post">
<table class="table" id="PS_table3" style="font-size: 13.5px;">
		<thead>
			<th>ID <input type="text" id="PS_id3" name="PS_id"  class="form-control"/></th>
			<th>First Name <input type="text" id="PS_firstname" name="P_firstname" class="form-control"/></th>
		<th>Middle Name <input type="text" id="PS_middle"  name="P_middlename"class="form-control"/></th>
			<th>Last Name <input type="text" id="PS_lastnamez" name="P_lastname" class="form-control"/></th>
				<th>Age <input type="text" id="PS_agez" name="P_age" class="form-control"/></th>
						<th><label>Status</label>
				<select name="P_status" class="form-control">
					
						<option name="P_status" values="Pregnant">Pregnant</option>
				        <option value="Lactating">Lactating</option>
						</select></th>
						<th><button type="submit" name="PS_submit" class="btn btn-danger">UPDATE PREGNANT DETAILS</button></th>
</thead>
</table>
</form>

  <?php
$user = 'root';
$pass = 'root';
$db ='rural';
$db = new mysqli('localhost', $user,$pass,$db);

	$result = $db->query("SELECT *FROM members where status='Pregnant'");
?>
<br>
<table class="table" id="PS_table3" style="font-size: 13.5px;">
		<thead>
			<th>ID</th>	
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Status</th>
			</tr>
			</thead>
			
						<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['serial']?></td>
				<td> <?php echo $row['member_firstname']?></td>
				<td> <?php echo $row['member_middlename']?></td>
				<td> <?php echo $row['member_lastname']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['status']?></td>
	
				
<td>
			
				
				
	
				
				</td>
				</tr>
				
				<?php endwhile; ?>
			
</table>
</div>





 <div id="lactating" class="tab-pane fade">
	 <h3>Update Lactating Details > Barangay : <?php echo $_COOKIE['user_brgy'];?></h3>
<form action="pregnant.php" method="post">
<table class="table" id="PS_table4" style="font-size: 13.5px;">
		<thead>
			<th>ID <input type="text" id="PS_id4" name="PS_id"  class="form-control"/></th>
			<th>First Name <input type="text" id="PS_firstname2" name="P_firstname" class="form-control"/></th>
		<th>Middle Name <input type="text" id="PS_middle2"  name="P_middlename"class="form-control"/></th>
			<th>Last Name <input type="text" id="PS_lastnamez2" name="P_lastname" class="form-control"/></th>
				<th>Age <input type="text" id="PS_agez2" name="P_age" class="form-control"/></th>
						<th><label>Status</label>
				<select name="P_status" class="form-control">
					
						<option name="P_status" value="Lactating">Lactating</option>
				        <option value="Pregnant">Pregnant</option>
						</select></th>
						<th><button type="submit" name="PS_submit" class="btn btn-info">UPDATE LACTATING DETAILS</button></th>
</thead>
</table>
</form>

  <?php
$user = 'root';
$pass = 'root';
$db ='rural';
$db = new mysqli('localhost', $user,$pass,$db);

	$result = $db->query("SELECT *FROM members where status='Lactating'");
?>
<br>
<table class="table" id="PS_table4" style="font-size: 13.5px;">
		<thead>
			<th>ID</th>	
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Status</th>
			</tr>
			</thead>
			
						<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['serial']?></td>
				<td> <?php echo $row['member_firstname']?></td>
				<td> <?php echo $row['member_middlename']?></td>
				<td> <?php echo $row['member_lastname']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['status']?></td>
				<td> <?php echo $row['weight']?></td>
	
				
<td>
			
				
				
	
				
				</td>
				</tr>
				
				<?php endwhile; ?>
			
</table>
</div>



<div id="disability" class="tab-pane fade">
	 <h3>Update Disable Details > Barangay : <?php echo $_COOKIE['user_brgy'];?></h3>
<form action="pregnant.php" method="post">
<table class="table" id="PS_table5" style="font-size: 13.5px;">
		<thead>
			<th>ID <input type="text" id="PS_id5" name="PS_id"  class="form-control"/></th>
			<th>First Name <input type="text" id="PS_firstname3" name="P_firstname" class="form-control"/></th>
		<th>Middle Name <input type="text" id="PS_middle3"  name="P_middlename"class="form-control"/></th>
			<th>Last Name <input type="text" id="PS_lastnamez3" name="P_lastname" class="form-control"/></th>
			<th>Disability <input type="text" id="D_disability" name="disability" class="form-control"/></th>
				<th>Age <input type="text" id="PS_agez3" name="P_age" class="form-control"/></th>
						<th><label>Status</label>
				<select name="D_status" class="form-control">
					
						<option name="D_status" value="Yes">YES</option>
				        <option value="No">NO</option>
						</select></th>
						<th><button type="submit" name="D_submit" class="btn btn-info">UPDATE DISABLE DETAILS</button></th>
			
</thead>
</table>
</form>

  <?php
$user = 'root';
$pass = 'root';
$db ='rural';
$db = new mysqli('localhost', $user,$pass,$db);

	$result = $db->query("SELECT *FROM members where disable='YES'");
?>
<br>
<table class="table" id="PS_table5" style="font-size: 13.5px;">
		<thead>
			<th>ID</th>	
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Status</th>
			<th>Disability</th>
			</tr>
			</thead>
			
						<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['serial']?></td>
				<td> <?php echo $row['member_firstname']?></td>
				<td> <?php echo $row['member_middlename']?></td>
				<td> <?php echo $row['member_lastname']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['disable']?></td>
				<td> <?php echo $row['disability']?></td>				
<td>
			
				
				
	
				
				</td>
				</tr>
				
				<?php endwhile; ?>
			
</table>
</div>




<script>
$(document).ready(function() {
	$("#PS_table tbody tr").click(function() {
		
		var tableData = $(this).children("td").map(function() {
			return $(this).text();
		}).get();
		var td = tableData[0];
		var td2 = tableData[1];
		var td7 = tableData[4];
		var td3 = tableData[6];
		var td4 = tableData[7];
		var td5 = tableData[8];
		var td6 = tableData[9];
		
		document.getElementById("PS_id").value= ""+td+"";
		document.getElementById("PS_fname").value= ""+td2+"";
			document.getElementById("PS_age").value= ""+td7+"";
		document.getElementById("PS_weight").value= ""+td3+"";
		document.getElementById("PS_height").value= ""+td4+"";
		document.getElementById("PS_status").value= ""+td5+"";
		document.getElementById("PS_date").value= ""+td6+"";

	});
	$("#PS_table2 tbody tr").click(function() {
		
		var tableData = $(this).children("td").map(function() {
			return $(this).text();
		}).get();
		var td = tableData[0];
		var td2 = tableData[1];
		var td7 = tableData[4];
		var td3 = tableData[6];
		var td4 = tableData[7];
		var td5 = tableData[8];
		var td6 = tableData[9];
		
		document.getElementById("PS_id2").value= ""+td+"";
		document.getElementById("PS_fname2").value= ""+td2+"";
		document.getElementById("PS_age2").value= ""+td7+"";
		document.getElementById("PS_weight2").value= ""+td3+"";
		document.getElementById("PS_height2").value= ""+td4+"";
		document.getElementById("PS_status2").value= ""+td5+"";
	document.getElementById("PS_date2").value= ""+td6+"";

	});
		$("#PS_table3 tbody tr").click(function() {
		
		var tableData = $(this).children("td").map(function() {
			return $(this).text();
		}).get();
		var td = tableData[0];
		var td2 = tableData[1];
		var td3 = tableData[2];
		var td4 = tableData[3];
		var td5 = tableData[4];
		var td7 = tableData[5];
		
		document.getElementById("PS_id3").value= ""+td+"";
		document.getElementById("PS_firstname").value= ""+td2+"";
		document.getElementById("PS_middle").value= ""+td3+"";
		document.getElementById("PS_lastnamez").value= ""+td4+"";
		document.getElementById("PS_agez").value= ""+td5+"";
		document.getElementById("PS_statusz").value= ""+td7+"";
	

	});
	
			$("#PS_table4 tbody tr").click(function() {
		
		var tableData = $(this).children("td").map(function() {
			return $(this).text();
		}).get();
		var td = tableData[0];
		var td2 = tableData[1];
		var td3 = tableData[2];
		var td4 = tableData[3];
		var td5 = tableData[4];
		var td7 = tableData[5];
		
		document.getElementById("PS_id4").value= ""+td+"";
		document.getElementById("PS_firstname2").value= ""+td2+"";
		document.getElementById("PS_middle2").value= ""+td3+"";
		document.getElementById("PS_lastnamez2").value= ""+td4+"";
		document.getElementById("PS_agez2").value= ""+td5+"";
		document.getElementById("PS_statusz2").value= ""+td7+"";
	

	});
	
			$("#PS_table5 tbody tr").click(function() {
		
		var tableData = $(this).children("td").map(function() {
			return $(this).text();
		}).get();
		var td = tableData[0];
		var td2 = tableData[1];
		var td3 = tableData[2];
		var td4 = tableData[3];
		var td5 = tableData[4];
		var td7 = tableData[5];
		var td8 = tableData[6];
		
		document.getElementById("PS_id5").value= ""+td+"";
		document.getElementById("PS_firstname3").value= ""+td2+"";
		document.getElementById("PS_middle3").value= ""+td3+"";
		document.getElementById("PS_lastnamez3").value= ""+td4+"";
		document.getElementById("PS_agez3").value= ""+td5+"";
		document.getElementById("D_disability").value= ""+td8+"";
		document.getElementById("PS_statusz3").value= ""+td7+"";
			
	});
	
});

</script>


<div id="user_dialog" title="Add Data">

<form method="post" id="addMembersForm">


	<input type="hidden" name="id" value="<?php echo $value ?>"/>

   <div class="form-group">

    <label>Enter First Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control" />
    <span id="error_first_name" class="text-danger"></span>
   </div>
      <div class="form-group">
    <label>Enter Middle Name</label>
    <input type="text" name="middle_name" id="middle_name" class="form-control"/>
    <span id="error_middle_name" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>Enter Last Name</label>
    <input type="text" name="last_name" id="last_name" class="form-control" />
    <span id="error_last_name" class="text-danger"></span>
   </div>
      <div class="form-group">
    <label>Age</label>
    <input type="text" name="age" id="age" class="form-control" />
    <span id="error_age" class="text-danger"></span>
   </div>
   <div class="form-group">
       <label>Position</label>
				<select id="position" name ="position" placeholder="Select Role" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Role</option>
						<option value="Father">Father</option>
				        <option value="Mother">Mother</option>
						<option value="Son">Son</option>
						<option value="Daughter">Daughter</option>
						<option value="Uncle">Uncle</option>
						</select>
    <span id="error_position" class="text-danger"></span>
   </div>
   
    <div class="form-group">
       <label>Status</label>
			<select id="status" name ="status" placeholder="Select Status" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Status</option>
						<option value="Preschool">Preschool</option>
				        <option value="School">School</option>
						<option value="No">No</option>
						<option value="Pregnant">Pregnant</option>
						<option value="Lactation">Lactation</option>

						</select>
    <span id="error_status" class="text-danger"></span>
   </div>  
   
       <div class="form-group">
       <label>Disability</label>
			<select id="disability" name ="disability" placeholder="Select disability" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select disability</option>
						<option value="Yes">Yes</option>
				        <option value="No">No</option>


						</select>
    <span id="error_disability" class="text-danger"></span>
   </div>  
   
   

    <input type="hidden" name="row_id" id="hidden_row_id" />
    <input type="submit" name="addMembers" id="save" class="btn btn-info">
 </form>
 
 </div>
 
  <div id="action_alert" title="Action">
  
  </div>

  
 
</body>
</html>














<script>  
$(document).ready(function(){ 

	$('#addMembersForm').submit(function(e){
		e.preventDefault();   
		var formData = new FormData($(this)[0]);
		$.ajax({
			type : 'POST',
			url : 'http://localhost/test/addMembers.php',
			data : formData,
			contentType : false,
            cache       : false,
            processData : false,
			success: function(res) {
				console.log(res);
			}
		});
	});
 
 var count = 0;

 $('#user_dialog').dialog({
  autoOpen:false,
  width:400
 });

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'Add Data');
  $('#first_name').val('');
   $('#middle_name').val('');
  $('#last_name').val('');
    $('#age').val('');
	$('#position').val('');
	$('#status').val('');
		$('#disability').val('');
  $('#error_first_name').text('');
    $('#error_middle_name').text('');
  $('#error_last_name').text('');
   $('#error_age').text('');
      $('#error_position').text('');
	$('#error_status').text('');
		$('#error_disability').text('');
  $('#first_name').css('border-color', '');
   $('#middle_name').css('border-color', '');
  $('#last_name').css('border-color', '');
    $('#position').css('border-color', '');
    $('#age').css('border-color', '');
	 $('#status').css('border-color', '');
	 $('#disability').css('border-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_first_name = '';
  var error_middle_name = '';
  var error_last_name = '';
   var error_age = '';
   var error_status = '';
var error_position = '';
   var error_disability = '';
  var first_name = '';
   var middle_name = '';
  var last_name = '';
   var age = '';
      var status = '';
      var position = '';
	  var disability = '';
  if($('#first_name').val() == '')
  {
   error_first_name = 'First Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').css('border-color', '#cc0000');
   first_name = '';
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').css('border-color', '');
   first_name = $('#first_name').val();
  } 
    if($('#middle_name').val() == '')
  {
   error_middle_name = 'middle Name is required';
   $('#error_middle_name').text(error_middle_name);
   $('#middle_name').css('border-color', '#cc0000');
   middle_name = '';
  }
  else
  {
   error_middle_name = '';
   $('#error_middle_name').text(error_middle_name);
   $('#middle_name').css('border-color', '');
   middle_name = $('#middle_name').val();
  } 
  
  if($('#last_name').val() == '')
  {
   error_last_name = 'Last Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').css('border-color', '#cc0000');
   last_name = '';
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').css('border-color', '');
   last_name = $('#last_name').val();
  }
    if($('#age').val() == '')
  {
   error_age = 'Age is required';
   $('#error_age').text(error_age);
   $('#age').css('border-color', '#cc0000');
   age = '';
  }
  else
  {
   error_age = '';
   $('#error_age').text(error_age);
   $('#age').css('border-color', '');
   age = $('#age').val();
  } 
  
      if($('#position').val() == '')
  {
   error_position = 'Position is required';
   $('#error_position').text(error_position);
   $('#position').css('border-color', '#cc0000');
   position = '';
  }
  else
  {
   error_position = '';
   $('#error_position').text(error_position);
   $('#position').css('border-color', '');
   position = $('#position').val();
  } 
        if($('#status').val() == '')
  {
   error_status = 'Status is required';
   $('#error_status').text(error_status);
   $('#status').css('border-color', '#cc0000');
   status = '';
  }
  else
  {
   error_status = '';
   $('#error_status').text(error_status);
   $('#status').css('border-color', '');
   status = $('#status').val();
  } 
  if($('#disability').val() == '')
  {
   error_status = 'Disability is required';
   $('#error_disability').text(error_disability);
   $('#disability').css('border-color', '#cc0000');
   status = '';
  }
  else
  {
   error_disability = '';
   $('#error_disability').text(error_disability);
   $('#disability').css('border-color', '');
   disability = $('#disability').val();
  } 
  if(error_first_name != '' || error_last_name != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+first_name+'" /></td>';
	output += '<td>'+middle_name+' <input type="hidden" name="hidden_middle_name[]" id="middle_name'+count+'" value="'+middle_name+'" /></td>';   
   output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" value="'+last_name+'" /></td>';
  output += '<td>'+age+' <input type="hidden" name="hidden_age[]" id="age'+count+'" value="'+age+'" /></td>';
 output += '<td>'+position+' <input type="hidden" name="hidden_position[]" id="position'+count+'" value="'+position+'" /></td>';
  output += '<td>'+status+' <input type="hidden" name="hidden_status[]" id="status'+count+'" value="'+status+'" /></td>';
  output += '<td>'+disability+' <input type="hidden" name="hidden_disability[]" id="disability'+count+'" value="'+disability+'" /></td>';
          
	output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output = '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+row_id+'" class="first_name" value="'+first_name+'" /></td>';
  output = '<td>'+middle_name+' <input type="hidden" name="hidden_middle_name[]" id="middle_name'+row_id+'" class="middle_name" value="'+middle_name+'" /></td>';
  output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" value="'+last_name+'" /></td>';
   output += '<td>'+age+' <input type="hidden" name="hidden_age[]" id="age'+row_id+'" value="'+age+'" /></td>';
    output += '<td>'+position+' <input type="hidden" name="hidden_position[]" id="position'+row_id+'" value="'+position+'" /></td>';
    output += '<td>'+status+' <input type="hidden" name="hidden_status[]" id="status'+row_id+'" value="'+status+'" /></td>';
   output += '<td>'+disability+' <input type="hidden" name="hidden_disability[]" id="disability'+row_id+'" value="'+disability+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });


 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });



 
});  
</script>

