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
        <li><a href="login.php">Login</a></li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    
<div class="container-fluid">
</div>

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-6">

<form action="profile.php" method="post">
<h4><label style="color:maroon"> I. Geographical Profile</label></h4><hr>
   Baranggay: 
			<select name="brgy" placeholder="Select Baranggay" class="form-control">
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
	</select><br>
	<label>A. Location/ Boundary : </label>
<select name ="A1" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Location/Boundary</option>
						<option value="Within City/Poblacion">Within City/Poblacion</option>
				        <option value="Coastal">Coastal</option>	
						 <option value="Inland">Inland</option>	
						  <option value="Upland">Upland</option>	
						</select><br>
<label>B. Topography : </label>
<select name ="A2" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Topography</option>
						<option value="Plain">Plain</option>
				        <option value="Rolling Terrain">Rolling Terrain</option>	
						 <option value="Hilly">Hilly</option>	
						</select><br>
<h4><label style="color:maroon">II. Agricultural Profile</label></h4><hr>
<label>A. Physical Structures </label><br><hr>
<label>A.1 Rice Mill Existing in the Barangay: </label><br>
<select name ="AA1" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Rice Mill</option>
						<option value="Cono">Cono</option>
				        <option value="Kiskisan">Kiskisan</option>	
						</select><br>
<label>A2. Irrigation System Existing in the Barangay </label><br>
<select name ="AA2" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Irrigation</option>
						<option value="National (Constructed by NIA)">National (Constructed by NIA)</option>
				        <option value="Communal (Constructed by farmers Asso)">Communal (Constructed by farmers Asso)</option>	
						<option value="Pumps">Pumps</option>		
						<option value="Mountain Spring (Gravity)">Mountain Spring (Gravity)</option>	
						</select><br>
<label>A3. Existing Grain Warehouse</label><br>
<select name ="AA3" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Select Grain Warehouse</option>
						<option value="Goverment Operated">Goverment Operated</option>
				        <option value="Privately Operated">Privately Operated</option>	
						</select><br>
						
<label>Major Food Crops Grown</label><br><hr>
<label>B.1 Most Common Agricultual Products</label><br>
<label>A. Rice </label>
<select name ="B1A" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>
<label>B. Corn </label>
<select name ="B1B" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>						
<label>C. Rootcrops (Camote, Cassava, Gabi, etc.)  </label>
<select name ="B1C" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>								
<label>D. Vegetables (Tomato, Squash, etc.)</label>
<select name ="B1D" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>						
<label>E . Others</label>
<select name ="B1E" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>						
<label>B.2 Most Common Livestock/Poultry</label><br><hr>					
<label>Swine</label>
<select name ="B2A" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>		
<label>Goat</label>
<select name ="B2B" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>		
<label>Chicken</label>
<select name ="B2C" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>		
<label>Ducks</label>
<select name ="B2D" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>	
<label>E . Others</label>
<select name ="B2E" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>	
<label>B.3 Other Products</label><br><hr>					
<label>Fish</label>
<select name ="B3A" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>	
<label>Seaweeds</label>
<select name ="B3B" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>	
<label>Rattan</label>
<select name ="B3C" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>	
<label>Charcoal/Firewood</label>
<select name ="B3D" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>	
<label>Wild Bamboos </label>
<select name ="B3E" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select><br>
<label>Others </label>
<select name ="B3F" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>				
<h4><label style="color:maroon"> III. Socio Economic Situation</label></h4><hr>
<label>A. Family Size (Household Size)<br><br>
No. of Family Members	Number of families with corresponding size </label><br>
More than 10 :<input type="text" name="SA1" class="form-control"></input><br>
8 - 10 :<input type="text" name="SA2"  class="form-control"></input><br>
5 - 7 :<input type="text" name="SA3"  class="form-control"></input><br>
2 - 4 :<input type="text" name="SA4"  class="form-control"></input><br>
<label>B. Most common type/kind of dwelling units ( Ranking ) </label><br>
<label>TYPE : <br>
Conrete </label><select name ="SB1" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>		
<label>Semi - Conrete</label> <select name ="SB2" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>	
<label>Nipa/Bamboo </label><select name ="SB3" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>	
<label>Wood </label><select name ="SB4" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>
<label>Barong - Barong</label> <select name ="SB5" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>		
<label>Others </label><select name ="SB6" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>		
<label>C. Most Common Source of Drinking Water Supply ( Ranking ) </label><br>
<label>SOURCE : <br>
Open Dug Wells </label><select name ="SC1" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>
<label>Spring </label><select name ="SC2" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>	
<label>Artesian Wells </label><select name ="SC3" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>
<label>Deep Wells </label><select name ="SC4" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>	
<label>Waterworks System </label><select name ="SC5" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>	
<label>D. Electricity and Telephone Service(% Coverage)<br><br>
Electricity :</label><input type="text" name="SD1" class="form-control"></input><br>
<label>Telephone :</label><input type="text" name="SD2"  class="form-control"></input><br>	
<label>Cellphone :</label><input type="text" name="SD3"  class="form-control"></input><br>						
<label>E. Presense of School in the Barangay </label><br>
<label>Goverment <br>
</label><select name ="SE1" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="Pre-school">Pre-school</option>
						<option value="Elementary">Elementary</option>
						<option value="High School">High School</option>
						<option value="College">College</option>
						<option value="Vocational">Vocational</option>	
						</select><br>					
<label>Private <br>
</label><select name ="SE2" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="Pre-school">Pre-school</option>
						<option value="Elementary">Elementary</option>
						<option value="High School">High School</option>
						<option value="College">College</option>
						<option value="Vocational">Vocational</option>	
						</select><br>		
<label>F. Health Facilities in the Barangay </label><br>
<label>Goverment <br>
</label><select name ="SF1" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="Barangay Health Station">Barangay Health Station</option>
						<option value="Health/Nutrition Center">Health/Nutrition Center</option>
						<option value="Community Hospital/Clinic">Community Hospital/Clinic</option>	
						</select><br>
<label>Private <br>
</label><select name ="SF2" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="Dental Clinic">Dental Clinic</option>
						<option value="Medical Clinic">Medical Clinic</option>	
						</select><br>							
<label>G. Most Common Type of Toilet Facilities<br><br>
% of Total Household : <br><br>
<label>Water Sealed Led	:</label><input type="text" name="SG1"  class="form-control"></input><br>	
<label>Antipolo :</label><input type="text" name="SG2"  class="form-control"></input><br>						
<label>Open Pit	:</label><input type="text" name="SG3"  class="form-control"></input><br>	
<label>None :</label><input type="text" name="SG4"  class="form-control"></input><br>	
<label>H. Infrastracture<br>
Distance from Baranggay:</label> <br><br>
<label>National Road(Highway) </label><select name ="SH1" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Distance</option>
						<option value="ALONG">ALONG</option>
						<option value="NEAR">NEAR</option>
						<option value="FAR">FAR</option>
						<option value="NONE">NONE</option>	
						</select><br>	
<label>Provincial Road </label><select name ="SH2" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Distance</option>
						<option value="ALONG">ALONG</option>
						<option value="NEAR">NEAR</option>
						<option value="FAR">FAR</option>
						<option value="NONE">NONE</option>	
						</select><br>	
<label>Municipal Road </label><select name ="SH3" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Distance</option>
						<option value="ALONG">ALONG</option>
						<option value="NEAR">NEAR</option>
						<option value="FAR">FAR</option>
						<option value="NONE">NONE</option>	
						</select><br>
<label>Feeder Road </label><select name ="SH4" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Distance</option>
						<option value="ALONG">ALONG</option>
						<option value="NEAR">NEAR</option>
						<option value="FAR">FAR</option>
						<option value="NONE">NONE</option>	
						</select><br>
<label>Seaport/Pier </label><select name ="SH5" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Distance</option>
						<option value="ALONG">ALONG</option>
						<option value="NEAR">NEAR</option>
						<option value="FAR">FAR</option>
						<option value="NONE">NONE</option>	
						</select><br>
<label>Airport </label><select name ="SH6" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Distance</option>
						<option value="ALONG">ALONG</option>
						<option value="NEAR">NEAR</option>
						<option value="FAR">FAR</option>
						<option value="NONE">NONE</option>	
						</select><br></label>
						<br><br>
<label>I. Most Common Transport Facilities ( Ranking )</label><br><br>
<label>Bus</label><select name ="SI1" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>
<label>Jeepney </label><select name ="SI2" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>	
<label>Tricycle </label><select name ="SI3" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>
<label>Others </label><select name ="SI4" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>											
	<label>J. Source of Income of the Household's Main Earners ( Ranking )</label><br><br>
<label>Employment in goverment ore Private agencies</label><select name ="SJ1" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>
<label>Farming/Fishing </label><select name ="SJ2" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>	
<label>Self-employed (Business) </label><select name ="SJ3" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>
<label>Overseas Contract Workers </label><select name ="SJ4" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>						
<label>Professional (Practice Law/Medicine/Midwifery,etc.) </label><select name ="SJ5" class="form-control">
						 <option class="form-control" value="" disabled selected hidden>Ranking</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>	
						</select><br>								
<label>K.Main Source of Income of the Barangay<br><br>
<label>Share from Real State Tax :</label><input type="text" name="SK1"  class="form-control"></input><br>	
<label>Share from Development Fund :</label><input type="text" name="SK2"  class="form-control"></input><br>						
<label>Business & other taxes :</label><input type="text" name="SK3"  class="form-control"></input><br>	
<label>Others :</label><input type="text" name="SK4"  class="form-control"></input><br> 				
	<div class="form-group"> 
	<button type="submit" name="save" class="btn btn-primary"> Save</button>   <button type="submit" name="save"class="btn btn-warning"> Cancel</button>	
		</div>			
				
</div>
</form>
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
