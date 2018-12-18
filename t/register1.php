
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
    <li><a data-toggle="tab" class="register-tab" href="#register">Register</a></li>
    <li><a data-toggle="tab" href="#about">About us</a></li>
 </ul>
   <div class="tab-content">
    


    <div id="home" class="tab-pane fade in active">
	  <div class="col-sm-"></div>
	   


	
	<h3> Log in </h3>
     <form action ="log.php" method="post">
		  
	  <div class="col-sm-4">
	<div class="form-group" autocomplete="off">
	Username : 
	<input type="text" name="loguser" autocomplete="off" class="form-control"><br>
	Password: 
	<input type="password" autocomplete="off" name="logpass" class="form-control">

	<br>
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
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
	  <div class="col-sm-6">
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
</body>
</html>
