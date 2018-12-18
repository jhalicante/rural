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
        <li class="active"><a data-toggle="tab" href="#home">Monitor Accounts</a></li>
        <li><a data-toggle="tab" href="#announcements">Add Announcement</a></li> 
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    

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

<div class="container-fluid">
   <div class="tab-content">
	<?php require_once 't/approve.php'; ?>
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
	  <div class="col-sm-12">
  <?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM accounts");


//pre_r($result);
?>
<div class ="row">
  <div class="col-sm-12"></div>
  <h3>Accounts Monitoring </h3>
  
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
				class ="btn btn-flat btn-info" href="#menu1"> Approve</a>
				<a href="admin.php? pend=<?php echo $row['id'];?>"
				class ="btn btn-flat btn-warning" href="#menu1"> Pending</a>
				<a href="admin.php?delete=<?php echo $row['id'];?>"
				class ="btn btn-flat btn-danger" href="#menu1"> Reject</a>
				
				</td>
				</tr>
				
				<?php endwhile; ?>
</table>
  
</div>


</div>
</div>
	 
	 
	 
	  </div>
	  
    <div id="announcements" class="tab-pane fade">

	<h3>Input Announcement</h3>
	<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
	
	<label>Announcement #1: </label><br>

	<input type="file" name="image1"><br>
	Input Announcement Title :
	<input type="text" name="a1_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a1_content" class="form-control">
	</textarea><br>
	<button type="submit" name="save1" class="btn btn-flat btn-warning"> Update Announcement #1</button><br><br>

	<label>Announcement #2: </label><br>
		<input type="file" name="image2"><br>
	Input Announcement Title :
	
	<input type="text" name="a2_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a2_content" class="form-control">
	</textarea>
	<button type="submit" name="save2" class="btn btn-flat btn-warning"> Update Announcement #2</button><br><br>

	<label>Announcement #3: </label><br>
		<input type="file" name="image3"><br>
	Input Announcement Title :
	<input type="text" name="a3_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a3_content" class="form-control">
	</textarea>
	<button type="submit" name="save3" class="btn btn-flat btn-warning"> Update Announcement #3</button><br><br>

	<label>Announcement #4: </label><br>
		<input type="file" name="image4"><br>
	Input Announcement Title :
	<input type="text" name="a4_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a4_content" class="form-control">
	</textarea>
	<button type="submit" name="save4" class="btn btn-flat btn-warning"> Update Announcement #4</button><br><br>

	<label>Announcement #5: </label><br>
		<input type="file" name="image5"><br>
	Input Announcement Title :
	<input type="text" name="a5_title" class="form-control"><br>
	<textarea rows="4" cols="50" name="a5_content" class="form-control">
	</textarea>
	<button type="submit" name="save5" class="btn btn-flat btn-warning"> Update Announcement #5</button><br><br>

	</form>

	
	
	
	</div>
	
	
	
</div>
</div>


</div>
<?php include './lib/footer.php'; ?>
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
