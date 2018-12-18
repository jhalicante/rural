<?php

session_start();

$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");

?>

<html>
<head></head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<body>

<div class="container">
  <img src="images/Image.png" height="15%" style="position:absolute;"/><h2 style="position:absolute; left: 22%; top:3%; font-family:calibri; font-size:300%;"><u>This is a test data</h2></u>
<br><br><br><br><br><br><br>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#register">Register</a></li>
    <li><a data-toggle="tab" href="#menu2">About us</a></li>

 </ul>
<br>

  <div class="tab-content">
 <div id="home" class="tab-pane fade in active">
      <h3>INHANS : Integrated Nutrtition and Health Information System</h3>
	  
	                  <div class="row" style="margin-top: 2%;">
                  <div class="col-md-2">
                    <span></span>
                  </div>
                  <div class="col-md-8">
                    <?php
                    REQUIRE "login-carousel.php";
                    ?>
                  </div>
                  <div class="col-md-2">
                    <span></span>
                  </div>
                  </div>
        <div class="row" style="margin-top: 2%;">
            <div class="col-md-1">
              <span></span>
            </div>
            <div class="col-md-10"> 
              <h3>About</h3>
              <p>This website, "Integrated Rural Healthcare and Nutrition Information System" (IRHNIS) was developed to automate the process being done by the organization in terms of reports generation.  The website is designed for the BHW, BNS and Health officers and Nutrition officers who are currently responsible and involved in manual process being done by the organization.</p>
            </div>
            <div class="col-md-1">
              <span></span>
            </div>
        </div>
</div>
	  
	  
	  
	  
	  
	  
	  
	  </div>
	  
<div id="register" class="tab-pane fade in active">
      <h3>Register Account</h3>
<form action ="" method="">
	
	<div class="form-group">	
	 First Name: 
	<input type="text" name="account_firstname" class="form-control">
	
	 Middle Name: 
	<input type="text" name="account_middlename" class="form-control">	
	 Last Name: 
	 <input type="text" name="account_lastname" class="form-control">	

	 Baranggay 
	<input type="text" name ="baranggay"  list ="brgylist"class="form-control" placeholder="Select Baranggay">
	<datalist id="brgylist">
<option value="Anapog-Sibucao">Anapog-Sibucao</option>
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
	</datalist>

	 Number: 
	 <input type="text" name="number" class="form-control">	
	 Position: 
	 <input type="text" name="position" class="form-control">	
	 Username: 
	 <input type="text" name="username" class="form-control">	
	 Password: 
	 <input type="text" name="password" class="form-control">		

	<br>
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
	</div>
</div>

<div id="home" class="tab-pane fade in active">
      <h3>Register Account</h3></div>
</div>
</div>

</body>
</html>