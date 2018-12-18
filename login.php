<?php
  include './lib/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php  echo SITE_NAME; ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo ASSET_URL; ?>plugins/iCheck/square/blue.css">
  <style>
      video {
          top :0;
          position : fixed;
          z-index: -1;
      }
  </style>
</head>
<body class="hold-transition login-page">
    <video src="assets/video2.mp4" id="bgvideo" autoplay="autoplay" loop width="100%"></video>
<div class="login-box" style="margin: 1% auto;">
  <div class="login-logo">
      <img src="assets/images/Image.png" alt="" width="40%">
      <br/>
      <h4><?php  echo SITE_NAME; ?></h4>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="border-radius:10px;background:rgba(255, 255, 255, 1);">
      <h4 class="text-center">Login to start your session</h4>
      <br/>
<div class="container-fluid"> 
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Login</a></li>
        <li><a data-toggle="tab" class="register-tab" href="#register">Register</a></li>
    </ul>
   <div class="tab-content">

    <div id="home" class="tab-pane fade in active ">
     <form action ="log.php" method="post">
		  
	  <div class="col-sm-12">
	<div class="form-group" autocomplete="off">
	Username : 
	<input type="text" name="loguser" autocomplete="off" class="form-control"><br>
	Password: 
	<input type="password" autocomplete="off" name="logpass" class="form-control">

	<br>
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Login</button>   
	<a href="index.php" class="btn btn-link">Back to home</a>	
		</div>
	
	</form>
		<?php
		if (isset($_GET['error']) == true){
			echo '<font color="red"><label>Your account is either pending or incorrect input</label></font>';
		}

		?>	
	</div>





</div>
	 
	  </div>
	  
	  
	  
    <div id="register" class="tab-pane fade">

     
	  <div class="col-sm-"></div>
	  <div class="col-sm-12">
	   <h3>Register Account</h3>
	<form action ="regi.php" method="post">
	
	<div class="form-group">	
	First Name: 
	<input type="text" name="R_firstname" class="form-control">
	Middle Name: 
	<input type="text" name="R_middlename" class="form-control">
	Last Name: 
	<input type="text" name="R_lastname" class="form-control">
  <div class="form-group">
   Baranggay: 
			<select name="R_baranggay" placeholder="Select Baranggay" class="form-control">
<option value="Anapog-Sibucao">Anapog-Sibucao</option>
 <option class="form-control" value="" disabled selected hidden>Select Baranggay</option>
				        <option value="Argao">Argao</option>
				        <option value="BalanacanA">Balanacan A</option>
				        <option value="BalanacanB">Balanacan B</option>
				        <option value="Banto">Banto</option>
				        <option value="BintakayA">Bintakay A</option>
				        <option value="BintakayB">Bintakay B</option>
				        <option value="BocBoc">BocBoc</option>
				        <option value="Butansapa">Butansapa</option>
				        <option value="Candahon">Candahon</option>
				        <option value="Capayang">Capayang</option>
				        <option value="Danao">Danao</option>
				        <option value="DulongBayan">Dulong Bayan</option>
				        <option value="GitnangBayan">Gitnang Bayan</option>
				        <option value="Guisian">Guisian</option>
				        <option value="Hinadharan">Hinadharan</option>
				        <option value="Hinanggayon">Hinanggayon</option>
				        <option value="Ino">Ino</option>
				        <option value="Janagdong">Janagdong</option>
				        <option value="Laon">Laon</option>
				        <option value="Lamesa">Lamesa</option>
				        <option value="Magapua">Magapua</option>
				        <option value="Malusak">Malusak</option>
				        <option value="Malayak">Malayak</option>
				        <option value="Mampaitan">Mampaitan</option>
				        <option value="MangyanMababad">Mangyan Mababad</option>
				        <option value="MarketSite">Market-Site</option>
				        <option value="MabataasNaBayan">Mabataas Na Bayan</option>
				        <option value="Mendez">Mendez</option>
				        <option value="NangkaI">Nangka-I</option>
				        <option value="NangkaII">Nangka-II</option>
				        <option value="Paye">Paye</option>
				        <option value="Pili">Pili</option>
				        <option value="PutingBuhangin">Puting Buhangin</option>
				        <option value="SayaoA">Sayao A</option>
				        <option value="SayaoB">Sayao B</option>
				        <option value="Sumangga">Sumangga</option>
				        <option value="Silangan">Silangan</option>
				        <option value="Tarug">Tarug</option>
				        <option value="VillaMendez">Villa Mendez</option>
	</select>
	Number: 
	<input type="text" name="R_number" class="form-control">	
	
	    <div class="form-group">
   Position: 
		<select name="R_position" placeholder="Select Position" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Position</option>
						<option value="Captain">Baranggay Captain</option>
				        <option value="MNAO">Municipal Nutrition Action Officer</option>
				        <option value="DPO">District Program Coordinator</option>	
						<option value="Midwife">Midwife</option>							
						</select>	
   </div>  
	<br>
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
		</div>
	</form>
	

	
	</div>
	</div>
</div>
<?php
if(isset($_GET['mode'])) {
	if($_GET['mode'] == 'register') {
		echo '<script>setTimeout(() => {$(".register-tab").click();},100);</script>';
	}
}
?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo ASSET_URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo ASSET_URL; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
