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
<?php
  include './lib/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo SITE_NAME; ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include './lib/header.php'; ?>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu xnav xnav-tabs" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active"><a data-toggle="tab" href="#home">Healthy Lifestyle</a></li>
        <li><a data-toggle="tab" href="#menu1">Diabetese</a></li>
        <li><a data-toggle="tab" href="#menu2">R & H : Blood Monitoring</a></li>
        <li><a data-toggle="tab" href="#menu3">R & H : Red Cough</a></li>
        <li><a data-toggle="tab" href="#menu4">Breast Exam</a></li>
        <li><a data-toggle="tab" href="#menu5">Family Planning</a></li>
        <li><a data-toggle="tab" href="#menu6">Diseases</a></li>
        <li><a data-toggle="tab" href="#menu7">Animal Bite</a></li>
        <li><a data-toggle="tab" href="#menu8">ECCD Card</a></li>
        <li><a data-toggle="tab" href="#changepassword">Change Password</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">



<div class="container-fluid" style="padding-right: 25px;padding-left: 25px;"> 
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
    
<?php

$brgy = $_COOKIE['user_brgy'];
$purok = $_COOKIE['user_purok'];

?>

    <div id="home" class="tab-pane fade in active">
      <h3>Healthy Lifestyle :<?php echo 'Brgy '.$_COOKIE['user_brgy'].' > Purok '.$purok ?> </h3>
      

<!-- ETO YUNG SIMULA NG CODES NG HEALTHY LIFESTYLE-->


	
	<?php require_once 'process.php'; ?>
	
		
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
	
	
<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM bhw");



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
			<th>Age</th>
			<th>Height</th>
			<th>Weight</th>
			<th>BMI</th>
			<th>Status</th>
			<th>Waist</th>
			<th>WHR</th>
			<th>Baranggay</th>
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['first_name']?></td>
				<td> <?php echo $row['middle_name']?></td>
				<td> <?php echo $row['last_name']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['height']?></td>
				<td> <?php echo $row['weight']?></td>
				<td> <?php echo $row['bmi']?></td>
				<td> <?php echo $row['status']?></td>
				<td> <?php echo $row['waist']?></td>
				<td> <?php echo $row['whr']?></td>
				<td> <?php echo $row['brgy']?></td>
				<td>
				<a href="index.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info"> Edit</a>
				<a href="index.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger" href="#menu1"> Delete</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
<button class="btn btn-warning" role="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    ADD INFORMATION
  </button>
  
</div>
</div>
<br>

<div class="row">
<div class="col-sm-2 hide"> </div>

<div class="col-sm-9" class="hidden" id="collapseExample">
	<form method="POST" action="process.php">
	<div class="card card-body">
<div class="form-group">
	<label> Baranggay</label>
	<input type="text" name ="brgy" class="form-control" value="PAYE" placeholder="PAYE">
</div>
	
	<div class="form-group">
	<label> First Name</label>
	<input type="text" name ="fname" class="form-control" value="<?php echo$fname;?>" placeholder="First Name">
</div>
<div class="form-group">
	<label> Middle Name</label>
	<input type="text" name ="mname" class="form-control" value="<?php echo$mname;?>"placeholder="Middle Name">
	</div>
<div class="form-group">
	<label> Last Name </label>
	<input type="text" name ="lname" class="form-control" placeholder="Last Name">
	</div>	
<div class="form-group">
	<label> Age </label>
	<input type="text" name ="age" class="form-control" placeholder="Age">
	</div>		
	
<div class="form-group">
	<label> Height in cm</label>
	<input type="text" name ="height" class="form-control" placeholder="Height">
	</div>	
	
<div class="form-group">
	<label> Weight in kg</label>
	<input type="text" name ="weight" class="form-control" placeholder="Weight">
	</div>		
	
<div class="form-group">
	<label> BMI :</label>
	<input type="text" name ="bmi" class="form-control" placeholder="Body Mass Index">
	</div>	

<div class="form-group">
	<label> Status :</label>
	<input type="text" name ="status" class="form-control" placeholder="Status">
	</div>	
	
<div class="form-group">
	<label> Waist :</label>
	<input type="text" name ="waist" class="form-control" placeholder="Waist">
	</div>	
	
	<div class="form-group">
	<label> WHR:</label>
	<input type="text" name ="whr" class="form-control" placeholder="WHR">
	</div>	
	
	
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
	
	</form>
	</div>
</div>
</div>
<?php
function pre_r( $array ) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
?>

 </div>

<!-- END CODES NG HEALTHY LIFESTYLE-->



	<!--- START CODE FOR diabetese-->

  
<div id="menu1" class="tab-pane fade">
      <h3>Health and Nutrition : Diabetese <?php echo 'Brgy '.$brgy.' > Purok '.$purok ?></h3>
      
  

	
	<?php require_once 'diabetese.php'; ?>
	
	
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
	
	
	
	
	
	
	
<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM diabetese");


//pre_r($result);
?>
<div class ="row">
	<div class="col-sm-2">


</center>	
</div>


<br>
<div id="Healthylifestylez2" class ="col-sm-20">
	<table class="table table-condensed table-bordered table-hover table-striped">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Date</th>
			<th>Method</th> 
			<th>Baranggay</th> 
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['first_name']?></td>
				<td> <?php echo $row['middle_name']?></td>
				<td> <?php echo $row['last_name']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['date']?></td>
				<td> <?php echo $row['method']?></td>
				<td> <?php echo $row['brgy']?></td>
				
				
				<td>
				<a href="index.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info"> Edit</a>
				<a href="index.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger"> Delete</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
<button class="btn btn-danger" role="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7">
    ADD INFORMATION
  </button>
  
</div>
</div>
<br>

<div class="row">
<div class="col-sm-2 hide"> </div>

<div class="col-sm-9" class="hidden" id="collapseExample7">

	<div class="card card-body">
	<form method="POST" action="diabetese.php">
	<div class="form-group">
	<label> Baranggay</label>
	<input type="text" name ="brgy2" class="form-control" value="PAYE" placeholder="PAYE">
</div>
	<div class="form-group">
	<label> First Name</label>
	<input type="text" name ="fname1" class="form-control" value="<?php echo$fname;?>" placeholder="First Name">
</div>
<div class="form-group">
	<label> Middle Name</label>
	<input type="text" name ="mname2" class="form-control" value="<?php echo$mname;?>"placeholder="Middle Name">
	</div>
<div class="form-group">
	<label> Last Name </label>
	<input type="text" name ="lname2" class="form-control" placeholder="Last Name">
	</div>	
<div class="form-group">
	<label> Age </label>
	<input type="text" name ="age2" class="form-control" placeholder="Age">
	</div>		
	
<div class="form-group">
	<label> Date</label>
	<input type="text" name ="date2" class="form-control" placeholder="date">
	</div>	
	

<div class="form-group">
	<label> Method</label>
	<input type="text" name ="method" class="form-control" value="langgam method" placeholder="langgam method">
	</div>			

	
	<div class="form-group"> 
	<button type="submit" href="#menu1" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
	
	</form>
	</div>
</div>
</div> 
	  </div>
	  
 
	
	
	
	
<!-- START CODES NG NUTRITION-->
   <div id="menu2" class="tab-pane fade">
     <h3>Health and Nutrition : Blood Monitoring <?php echo 'Brgy '.$brgy.' > Purok '.$purok ?></h3>
<?php require_once 'nutrition.php'	; ?>
	
	
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
	
	
	
	
	
	
	
<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM nutrition");


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
			<th>Age</th>
			<th>Blood</th>
			<th>Pressure</th> 	
			<th>remarks</th>
			<th>Baranggay</th>			
			
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['first_name']?></td>
				<td> <?php echo $row['middle_name']?></td>
				<td> <?php echo $row['last_name']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['blood']?></td>
				<td> <?php echo $row['pressure']?></td>
				<td> <?php echo $row['remarks']?></td>
				<td> <?php echo $row['brgy']?></td>
				
				
				<td>
				<a href="index.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info"> Edit</a>
				<a href="index.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger"> Delete</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
<button class="btn btn-primary" role="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
    ADD INFORMATION
  </button>
  
</div>
</div>
<br>

<div class="row">
<div class="col-sm-2 hide"> </div>

<div class="col-sm-9" class="hidden" id="collapseExample3">

	<div class="card card-body">
	<form method="POST" action="nutrition.php">
	<div class="form-group">
	<label> Baranggay</label>
	<input type="text" name ="brgy" class="form-control" value="PAYE" placeholder="PAYE">
</div>
	<div class="form-group">
	<label> First Name</label>
	<input type="text" name ="fname" class="form-control" value="<?php echo$fname;?>" placeholder="First Name">
</div>
<div class="form-group">
	<label> Middle Name</label>
	<input type="text" name ="mname" class="form-control" value="<?php echo$mname;?>"placeholder="Middle Name">
	</div>
<div class="form-group">
	<label> Last Name </label>
	<input type="text" name ="lname" class="form-control" placeholder="Last Name">
	</div>	
<div class="form-group">
	<label> Age </label>
	<input type="text" name ="age" class="form-control" placeholder="Age">
	</div>		
	
<div class="form-group">
	<label> Blood Pressure : </label>
	<input type="text" name ="blood" class="form-control" placeholder="Blood Pressure">
	</div>	
	
<div class="form-group">
	<label> OVER</label>
	<input type="text" name ="pressure" class="form-control" placeholder="Blood Pressure">
	</div>		
	
	<div class="form-group">
	<label> REMARKS</label>
	<input type="text" name ="remarks"  list ="exampleList"class="form-control" placeholder="SELECT REMARK">
	<datalist id="exampleList">
	<option value="NORMAL">
	<option value ="HIGH BLOOD">
	<option value= "LOW BLOOD">
	</div>	
	
	
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
	
	</form>
	</div>
</div>
</div>
   </div>
   
<!--- START CODE FOR redc-->

   
    <div id="menu3" class="tab-pane fade">
	  <h3>Health and Nutrition : Red Cough <?php echo 'Brgy '.$brgy.' > Purok '.$purok ?></h3>
	
	<?php require_once 'redcough.php'; ?>
	
	
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
	
	

<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM redcough");


//pre_r($result);
?>
<div class ="row">
	<div class="col-sm-2">


</center>	
</div>


<br>
<div id="Healthylifestylez" class ="col-sm-20">
	<table class="table table-condensed table-bordered table-hover table-striped">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Date</th>
			<th>Remarks</th> 	
			<th>Baranggay</th>
			
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['first_name']?></td>
				<td> <?php echo $row['middle_name']?></td>
				<td> <?php echo $row['last_name']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['date']?></td>
				<td> <?php echo $row['remarks']?></td>
				<td> <?php echo $row['brgy']?></td>
				
				
				<td>
				<a href="index.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info"> Edit</a>
				<a href="index.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger"> Delete</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
<button class="btn btn-warning" role="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6">
    ADD INFORMATION
  </button>
  
</div>
</div>
<br>

<div class="row">
<div class="col-sm-2 hide"> </div>

<div class="col-sm-9" class="hidden" id="collapseExample6">

	<div class="card card-body">
	<form method="POST" action="redcough.php">
	<div class="form-group">
	<label> Baranggay</label>
	<input type="text" name ="brgy" class="form-control" value="PAYE" placeholder="PAYE">
</div>
	<div class="form-group">
	<label> First Name</label>
	<input type="text" name ="fname" class="form-control" value="<?php echo$fname;?>" placeholder="First Name">
</div>
<div class="form-group">
	<label> Middle Name</label>
	<input type="text" name ="mname" class="form-control" value="<?php echo$mname;?>"placeholder="Middle Name">
	</div>
<div class="form-group">
	<label> Last Name </label>
	<input type="text" name ="lname" class="form-control" placeholder="Last Name">
	</div>	
<div class="form-group">
	<label> Age </label>
	<input type="text" name ="age" class="form-control" placeholder="Age">
	</div>		
	
<div class="form-group">
	<label> Date</label>
	<input type="text" name ="date" class="form-control" placeholder="date">
	</div>	
	
	<div class="form-group">
	<label> REMARKS</label>
	<input type="text" name ="remarks2"  list ="exampleList3"class="form-control" placeholder="SELECT REMARK">
	<datalist id="exampleList3">
	<option value="POSITIVE">
	<option value ="NEGATIVE">
	</div>	
		

	
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
	
	</form>
	
	</div>
	
</div>

</div>
</div>
<!-- END CODES NG red cough-->

	
<!--- START CODE FOR redc-->


<div id="menu4" class="tab-pane fade">
   <h3>Health and Nutrition : Breast Exam <?php echo 'Brgy '.$brgy.' > Purok '.$purok ?></h3>
	
	<?php require_once 'breastexam.php'; ?>
	
	
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
	
	
	
	
	
	
	
<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM breastexam");


//pre_r($result);
?>
<div class ="row">
	<div class="col-sm-2">


</center>	
</div>


<br>
<div id="Healthylifestylez6" class ="col-sm-20">
	<table class="table table-condensed table-bordered table-hover table-striped">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Date Examnied</th>
			<th>Date Taught</th>
			<th>Finished Breast Exam</th> 	
			<th>Baranggay</th>
			
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['first_name']?></td>
				<td> <?php echo $row['last_name']?></td>
				<td> <?php echo $row['birth']?></td>
				<td> <?php echo $row['date']?></td>
				<td> <?php echo $row['taught']?></td>
				<td> <?php echo $row['finish']?></td>
				<td> <?php echo $row['brgy']?></td>
				
				
		<td>
				<a href="index.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info"> Edit</a>
				<a href="index.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger"> Delete</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
<button class="btn btn-primary" role="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7">
    ADD INFORMATION
  </button>
  
</div>
</div>
<br>

<div class="row">
<div class="col-sm-2 hide"> </div>

<div class="col-sm-9" class="hidden" id="collapseExample7">

	<div class="card card-body">
	<form method="POST" action="breastexam.php">
	<div class="form-group">
	<label> Baranggay</label>
	<input type="text" name ="brgy3" class="form-control" value="PAYE" placeholder="PAYE">
</div>
	<div class="form-group">
	<label> First Name</label>
	<input type="text" name ="fname3" class="form-control" value="<?php echo$fname;?>" placeholder="First Name">
</div>
<div class="form-group">
	<label> Last Name</label>
	<input type="text" name ="lname3" class="form-control" value="<?php echo$lname;?>"placeholder="Last Name">
	</div>
<div class="form-group">
	<label> Age </label>
	<input type="text" name ="birth" class="form-control" placeholder="Age">
	</div>	
<div class="form-group">
	<label> Date Taught </label>
	<input type="text" name ="taught" class="form-control" placeholder="Date Taught">
	</div>		
	
<div class="form-group">
	<label> Date Finished</label>
	<input type="text" name ="finish" class="form-control" placeholder="Date finished">
	</div>	

		

	
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
	
	</form>
	
	</div>
	
</div>

</div>
</div>
<!-- END OF BREASTEXAM-->

<!-- START OF FAMILY EXAM-->

<div id="menu5" class="tab-pane fade">
   <h3>Family Planning <?php echo 'Brgy '.$brgy.' > Purok '.$purok ?></h3>
	
	<?php require_once 'family.php'; ?>
	
	
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
	
	
	
	
	
	
	
<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM family");


//pre_r($result);
?>
<div class ="row">
	<div class="col-sm-2">


</center>	
</div>


<br>
<div id="Healthylifestylez7" class ="col-sm-20">
	<table class="table table-condensed table-bordered table-hover table-striped">
		<thead>
		<tr>
			<th>Father's Firstname</th>
			<th>Father's Lastname</th>
			<th>Age</th>
			<th>Moher's Firstname</th>
			<th>Mother's Lastname</th>
			<th>Age</th> 	
			<th>Status</th>
			<th>Method</th>	
			<th>Baranggay</th>				
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['fatherfirstname']?></td>
				<td> <?php echo $row['fathersurname']?></td>
				<td> <?php echo $row['fatherage']?></td>
				<td> <?php echo $row['motherfirstname']?></td>
				<td> <?php echo $row['mothersurname']?></td>
				<td> <?php echo $row['motherage']?></td>
				<td> <?php echo $row['status']?></td>
				<td> <?php echo $row['method']?></td>
				<td> <?php echo $row['brgy']?></td>
				
				
		<td>
				<a href="index.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info"> Edit</a>
				<a href="index.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger"> Delete</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
<button class="btn btn-warning" role="button" data-toggle="collapse" data-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample8">
    ADD INFORMATION
  </button>
  
</div>
</div>
<br>

<div class="row">
<div class="col-sm-2 hide"> </div>

<div class="col-sm-9" class="hidden" id="collapseExample8">

	<div class="card card-body">
	<form method="POST" action="family.php">
	<div class="form-group">
	<label> Baranggay</label>
	<input type="text" name ="brgy3" class="form-control" value="PAYE" placeholder="PAYE">
</div>
	<div class="form-group">
	<label> Father First Name</label>
	<input type="text" name ="ffname" class="form-control" placeholder="First Name">
</div>
<div class="form-group">
	<label> Father Last Name</label>
	<input type="text" name ="flname" class="form-control" placeholder="Last Name">
	</div>
<div class="form-group">
	<label> Age </label>
	<input type="text" name ="fatherage" class="form-control" placeholder="Age">
	</div>	
<div class="form-group">
	<label> Mother First Name </label>
	<input type="text" name ="mfname" class="form-control" placeholder="First Name">
	</div>		
	
<div class="form-group">
	<label> Mother Last Name</label>
	<input type="text" name ="mlname" class="form-control" placeholder="Last Name">
	</div>	
<div class="form-group">
	<label> Age </label>
	<input type="text" name ="motherage" class="form-control" placeholder="Age">
	</div>	

	<div class="form-group">
	<label> Status</label>
	<input type="text" name ="status"  list ="exampleList4"class="form-control" placeholder="SELECT STATUS">
	<datalist id="exampleList4">
	<option value="MOTIVATED">
	<option value ="NEW ACCEPTOR">
	<option value ="OLD ACCEPTOR">
	</div>	



	<div class="form-group">
	<label> Method</label>
	<input type="text" name ="method"  list ="exampleList5"class="form-control" placeholder="SELECT METHOD">
	<datalist id="exampleList5">
	<option value="PILLS">
	<option value ="IUD">
	</div>			


	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
	
	</form>
	
	</div>
	
</div>

</div>
</div>
<!--END OF FAMILY PLANNING-->

<!--- START CODE FOR diseases-->

  
<div id="menu6" class="tab-pane fade">
      <h3>Diseases <?php echo 'Brgy '.$brgy.' > Purok '.$purok ?></h3>
      
  

	
	<?php require_once 'diseases.php'; ?>
	
	
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
	
	
	
	
	
	
	
<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM disease");


//pre_r($result);
?>
<div class ="row">
	<div class="col-sm-2">


</center>	
</div>


<br>
<div id="Healthylifestylez10" class ="col-sm-20">
	<table class="table table-condensed table-bordered table-hover table-striped">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Diseases</th>
			<th>Breathing</th> 
			<th>Action</th> 
			<th>Brgy</th>
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['first_name']?></td>
				<td> <?php echo $row['middle_name']?></td>
				<td> <?php echo $row['last_name']?></td>
				<td> <?php echo $row['age']?></td>
				<td> <?php echo $row['disease']?></td>
				<td> <?php echo $row['breathing']?></td>
				<td> <?php echo $row['action']?></td>
				<td> <?php echo $row['brgy']?></td>
				
				
				<td>
				<a href="index.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info"> Edit</a>
				<a href="index.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger"> Delete</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
<button class="btn btn-danger" role="button" data-toggle="collapse" data-target="#collapseExample14" aria-expanded="false" aria-controls="collapseExample14">
    ADD INFORMATION
  </button>
  
</div>
</div>
<br>

<div class="row">
<div class="col-sm-2 hide"> </div>

<div class="col-sm-9" class="hidden" id="collapseExample14">

	<div class="card card-body">
	<form method="POST" action="diseases.php">
	<div class="form-group">
	<label> Baranggay</label>
	<input type="text" name ="brgy" class="form-control" value="PAYE" placeholder="PAYE">
</div>
	<div class="form-group">
	<label> First Name</label>
	<input type="text" name ="fname" class="form-control" value="<?php echo$fname;?>" placeholder="First Name">
</div>
<div class="form-group">
	<label> Middle Name</label>
	<input type="text" name ="mname" class="form-control" value="<?php echo$mname;?>"placeholder="Middle Name">
	</div>
<div class="form-group">
	<label> Last Name </label>
	<input type="text" name ="lname" class="form-control" placeholder="Last Name">
	</div>	
<div class="form-group">
	<label> Age </label>
	<input type="text" name ="age" class="form-control" placeholder="Age">
	</div>		
	
<div class="form-group">
	<label> Diseases</label>
	<input type="text" name ="disease" class="form-control" placeholder="disease">
	</div>	
	

<div class="form-group">
	<label> Breathing</label>
	<input type="text" name ="breathing" class="form-control" placeholder="breathing">
	</div>				

<div class="form-group">
	<label> Action</label>
	<input type="text" name ="action" class="form-control" placeholder="Explain the Action">
	</div>				

	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
	
	</form>
	</div>
</div>
</div>
</div>
<!-- END CODES NG red cough-->



<!--- START CODE FOR ANIMAL BITE-->

  
<div id="menu8" class="tab-pane fade">
      <h3>ECD CARD <?php echo 'Brgy '.$brgy.' > Purok '.$purok ?></h3>
      
  

	
	<?php require_once 'ecd.php'; ?>
	
	
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
	
	
	
	
	
	
	
<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM ecd");


//pre_r($result);
?>
<div class ="row">
	<div class="col-sm-2">


</center>	
</div>


<br>
<div id="Healthylifestylez12" class ="col-sm-20">
	<table class="table table-condensed table-bordered table-hover table-striped">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Date Given</th>
			<th>Brgy</th>
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['first_name']?></td>
				<td> <?php echo $row['middle_name']?></td>
				<td> <?php echo $row['last_name']?></td>
				<td> <?php echo $row['date']?></td>
				<td> <?php echo $row['brgy']?></td>
				
				
				<td>
				<a href="index.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info"> Edit</a>
				<a href="index.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger"> Delete</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
<button class="btn btn-danger" role="button" data-toggle="collapse" data-target="#collapseExample15" aria-expanded="false" aria-controls="collapseExample15">
    ADD INFORMATION
  </button>
  
</div>
</div>
<br>

<div class="row">
<div class="col-sm-2 hide"> </div>

<div class="col-sm-9" class="hidden" id="collapseExample15">

	<div class="card card-body">
	<form method="POST" action="ecd.php">
	<div class="form-group">
	<label> Baranggay</label>
	<input type="text" name ="brgy4" class="form-control" value="PAYE" placeholder="PAYE">
</div>
	<div class="form-group">
	<label> First Name</label>
	<input type="text" name ="fname8" class="form-control" value="<?php echo$fname;?>" placeholder="First Name">
</div>
<div class="form-group">
	<label> Middle Name</label>
	<input type="text" name ="mname8" class="form-control" value="<?php echo$mname;?>"placeholder="Middle Name">
	</div>
<div class="form-group">
	<label> Last Name </label>
	<input type="text" name ="lname8" class="form-control" placeholder="Last Name">
	</div>	

<div class="form-group">
	<label> Date Given</label>
	<input type="text" name ="date8" class="form-control" placeholder="date">
	</div>	
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
	</form>
	</div>
</div>
</div>
</div>





<!--- START CODE FOR ANIMAL BITE-->

  
<div id="menu7" class="tab-pane fade">
      <h3>Animal Bite <?php echo 'Brgy '.$brgy.' > Purok '.$purok ?></h3>
      
  

	
	<?php require_once 'animal.php'; ?>
	
	
	<?php
	if (isset($_SESSION['message'])):?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>
	<?php endif?>
	
	
	
	
	
	
	
<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM animal");


//pre_r($result);
?>
<div class ="row">
	<div class="col-sm-2">


</center>	
</div>

<br>
<div id="Healthylifestylez11" class ="col-sm-20">
	<table class="table table-condensed table-bordered table-hover table-striped">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Animal</th>
			<th>Date of Incident</th>
			<th>Action Taken</th> 
			<th>Date of Injected Vaccine</th> 
			<th>Brgy</th>
			<th colspan="2"> Action </th>
			</tr>
			</thead>
			
			
			
			<?php
			while ($row = $result->fetch_assoc()):?>
			
			<tr>
				<td> <?php echo $row['first_name']?></td>
				<td> <?php echo $row['middle_name']?></td>
				<td> <?php echo $row['last_name']?></td>
				<td> <?php echo $row['animal']?></td>
				<td> <?php echo $row['date']?></td>
				<td> <?php echo $row['action']?></td>
				<td> <?php echo $row['vaccine']?></td>
				<td> <?php echo $row['brgy']?></td>
				
				
				<td>
				<a href="index.php? edit=<?php echo $row['id'];?>"
				class ="btn btn-info"> Edit</a>
				<a href="index.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-danger"> Delete</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
<button class="btn btn-danger" role="button" data-toggle="collapse" data-target="#collapseExample15" aria-expanded="false" aria-controls="collapseExample15">
    ADD INFORMATION
  </button>
  
</div>
</div>
<br>

<div class="row">
<div class="col-sm-2 hide"> </div>

<div class="col-sm-9" class="hidden" id="collapseExample15">

	<div class="card card-body">
	<form method="POST" action="animal.php">
	<div class="form-group">
	<label> Baranggay</label>
	<input type="text" name ="brgy3" class="form-control" value="PAYE" placeholder="PAYE">
</div>
	<div class="form-group">
	<label> First Name</label>
	<input type="text" name ="fname7" class="form-control" value="<?php echo$fname;?>" placeholder="First Name">
</div>
<div class="form-group">
	<label> Middle Name</label>
	<input type="text" name ="mname7" class="form-control" value="<?php echo$mname;?>"placeholder="Middle Name">
	</div>
<div class="form-group">
	<label> Last Name </label>
	<input type="text" name ="lname7" class="form-control" placeholder="Last Name">
	</div>	
<div class="form-group">
	<label> Animal</label>
	<input type="text" name ="animal" class="form-control" placeholder="Animal">
	</div>		
	
<div class="form-group">
	<label> Date of Incident</label>
	<input type="text" name ="date7" class="form-control" placeholder="date">
	</div>	
	

<div class="form-group">
	<label> Action Taken</label>
	<input type="text" name ="action2" class="form-control" placeholder="Explain the Action">
	</div>				

<div class="form-group">
	<label> Date of Applied Vaccine</label>
	<input type="text" name ="vaccine" class="form-control" placeholder="Date of Applied Vaccine">
	</div>				

	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
	
	</form>
	</div>
</div>
</div>
</div>
</div>
</div>

  
  </div>
  <?php include './lib/footer.php'; ?>

</div>

<script src="<?php echo ASSET_URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo ASSET_URL; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/morris.js/morris.min.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo ASSET_URL; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo ASSET_URL; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo ASSET_URL; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo ASSET_URL; ?>bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo ASSET_URL; ?>dist/js/adminlte.min.js"></script>
<script src="<?php echo ASSET_URL; ?>dist/js/pages/dashboard.js"></script>
<script src="<?php echo ASSET_URL; ?>dist/js/demo.js"></script>
</body>
</html>
