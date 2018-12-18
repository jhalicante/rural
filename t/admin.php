<?php

if(isset($_POST['save1'])) {
	
	$user = 'root';
	$pass = 'root';
	$db ='rural';	
	$db = new mysqli('localhost', $user,$pass,$db);

	$path = $_FILES['image1']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);

	$filepath = time().".".$ext;
	$uploaded_url = 'uploaded/'.$filepath;
	$filetmp = $_FILES['image1']['tmp_name'];
	
	$db->query("INSERT INTO `announcement`(`id`, `title1`, `title2`, `title3`, `title4`, `title5`, `announcement1`, `announcement2`, `announcement3`, `announcement4`, `announcement5`, `image1`, `image2`, `image3`, `image4`, `image5`) 
				VALUES (null,'".$_POST['a1_title']."','','','','','".$_POST['a1_content']."','','','','','".$filepath."','','','','')");

	move_uploaded_file($filetmp, $uploaded_url);
}

if(isset($_POST['save2'])) {
	
	$user = 'root';
	$pass = 'root';
	$db ='rural';	
	$db = new mysqli('localhost', $user,$pass,$db);

	$path = $_FILES['image2']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);

	$filepath = time().".".$ext;
	$uploaded_url = 'uploaded/'.$filepath;
	$filetmp = $_FILES['image2']['tmp_name'];
	
	$db->query("INSERT INTO `announcement`(`id`, `title1`, `title2`, `title3`, `title4`, `title5`, `announcement1`, `announcement2`, `announcement3`, `announcement4`, `announcement5`, `image1`, `image2`, `image3`, `image4`, `image5`) 
				VALUES (null,'','".$_POST['a2_title']."','','','','','".$_POST['a2_content']."','','','','','".$filepath."','','','')");

	move_uploaded_file($filetmp, $uploaded_url);
}




?>
<html>
<head></head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<body>

<div class="container">
  <img src="images/Image.png" height="15%" style="position:absolute;"/><h2 style="position:absolute; left: 17%; top:0; font-family:calibri; font-size:300%;">Rural Health and Nutrition Information System</h2>
<br><br><br><br><br><br><br>

    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Monitor Accounts</a></li>
  <li><a data-toggle="tab" href="#announcements">Add Announcement</a></li> 
	<a href="register1.php">
	<button type="submit" style="position:relative; left:58.5%" name="save" class="btn btn-primary"> Log Out</button> 
		</a>
		
 </ul>
   <div class="tab-content">
  
	<?php require_once 'approve.php'; ?>
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
    <div id="home" class="tab-pane fade in active">
	   
	  <div class="row"></div>
	  <div class="col-sm-">
	<h3> Accounts Monitoring </h3>
  <?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM accounts");


//pre_r($result);
?>
<div class ="row">
	<div class="col-sm-2">


</center>	
</div>

<br>
<div id="Healthylifestyle" class ="col-sm-20">
	<table class="table table-condensed table-bordered table-hover table-striped">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Baranggay</th>
			<th>Number</th>
			<th>Position</th>
			<th>Username</th>
			<th>Password</th>
			<th>Approval</th>
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['Account_firstname']?></td>
				<td> <?php echo $row['Account_middlename']?></td>
				<td> <?php echo $row['Account_lastname']?></td>
				<td> <?php echo $row['Baranggay']?></td>
				<td> <?php echo $row['Number']?></td>
				<td> <?php echo $row['Position']?></td>
				<td> <?php echo $row['username']?></td>
				<td> <?php echo $row['password']?></td>
				<td> <?php echo $row['approval']?></td>
					
				<td>
				<a href="admin.php?edit=<?php echo $row['id'];?>&number=<?php echo $row['Number'];?>"
				class ="btn btn-info" href="#menu1"> Approve</a>
				<a href="admin.php? pend=<?php echo $row['id'];?>"
				class ="btn btn-warning" href="#menu1"> Pending</a>
				<a href="admin.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger" href="#menu1"> Reject</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
  
</div>
<br>


</div>
</div>
	 
	 
	 
	  </div>
	  
    <div id="announcements" class="tab-pane fade"><br>

	<h3>Input Announcement</h3>
	<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
	
	<label>Announcement #1: </label><br>

	<input type="file" name="image1"><br>
	Input Announcement Title :
	<input type="text" name="a1_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a1_content" class="form-control">
	</textarea><br>
	<button type="submit" name="save1" class="btn btn-warning"> Update Announcement #1</button><br><br>

	<label>Announcement #2: </label><br>
		<input type="file" name="image2"><br>
	Input Announcement Title :
	
	<input type="text" name="a2_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a2_content" class="form-control">
	</textarea>
	<button type="submit" name="save2" class="btn btn-warning"> Update Announcement #2</button><br><br>

	<label>Announcement #3: </label><br>
		<input type="file" name="image3"><br>
	Input Announcement Title :
	<input type="text" name="a3_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a3_content" class="form-control">
	</textarea>
	<button type="submit" name="save3" class="btn btn-warning"> Update Announcement #3</button><br><br>

	<label>Announcement #4: </label><br>
		<input type="file" name="image4"><br>
	Input Announcement Title :
	<input type="text" name="a4_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a4_content" class="form-control">
	</textarea>
	<button type="submit" name="save4" class="btn btn-warning"> Update Announcement #4</button><br><br>

	<label>Announcement #5: </label><br>
		<input type="file" name="image5"><br>
	Input Announcement Title :
	<input type="text" name="a5_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a5_content" class="form-control">
	</textarea>
	<button type="submit" name="save5" class="btn btn-warning"> Update Announcement #5</button><br><br>

	</form>

	
	
	
	</div>
	
	
	
</div>







</body>
</html>
