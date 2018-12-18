<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  
    <title>Simple Sidebar - Start Bootstrap Template</title>
</head>
<body>
<div class="container">
  <img src="images/Image.png" height="15%" style="position:absolute;"/><h2 style="position:absolute; left: 17%; top:0; font-family:calibri; font-size:300%;">Integrated Rural Health and Nutrition Information System</h2>
<br><br><br><br><br><br><br><br>
<?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT count(bmi) as bmi,count(waist) as waist,count(whr) as whr FROM bhw where 1");
$row = $result->fetch_assoc();
$result1 = $db->query("SELECT count(method) as method FROM diabetese where 1");
$row1 = $result1->fetch_assoc();
$result2 = $db->query("SELECT count(remarks) as remarks FROM redcough where 1");
$row2 = $result2->fetch_assoc();
$result3 = $db->query("SELECT count(date) as date,count(taught) as taught FROM breastexam where 1");
$row3 = $result3->fetch_assoc();	

$result4 = $db->query("SELECT count(id) as id FROM ecd where 1");
$row4 = $result4->fetch_assoc();

$result5 = $db->query("SELECT count(status) as status FROM family where status='MOTIVATED'");
$row5 = $result5->fetch_assoc();

$result6 = $db->query("SELECT count(status) as status FROM family where status='NEW ACCEPTOR'");
$row6 = $result6->fetch_assoc();

$result7 = $db->query("SELECT count(status) as status FROM family where status='OLD ACCEPTOR'");
$row7 = $result7->fetch_assoc();


$result8 = $db->query("SELECT count(disease) as disease FROM disease where disease='Ubo'");
$row8 = $result8->fetch_assoc();

$result9 = $db->query("SELECT count(disease) as disease FROM disease where disease='Nagtatae'");
$row9 = $result9->fetch_assoc();

$result10 = $db->query("SELECT count(disease) as disease FROM disease where disease='Bulutong'");
$row10 = $result10->fetch_assoc();

$result11 = $db->query("SELECT count(disease) as disease FROM disease where disease='Tigdas'");
$row11 = $result11->fetch_assoc();

$result12 = $db->query("SELECT count(disease) as disease FROM disease where disease='Beke'");
$row12 = $result12->fetch_assoc();

$result13 = $db->query("SELECT count(disease) as disease FROM disease where disease='High Blood'");
$row13 = $result13->fetch_assoc();

$result14 = $db->query("SELECT count(disease) as disease FROM disease where disease='Diabetese'");
$row14 = $result14->fetch_assoc();

$result15 = $db->query("SELECT count(animal) as animal FROM animal where 1");
$row15 = $result15->fetch_assoc();

$result16 = $db->query("SELECT count(vaccine) as vaccine FROM animal where 1");
$row16 = $result16->fetch_assoc();
?>
<form action="" method="post">
<div class="row">
<div class="col-sm-3">
BMI : 
<input type ="text" name="BMI" class="form-control" value="<?php echo $row['bmi']; ?>"/>
WAIST : 
<input type ="text" name="WAIST" class="form-control" value="<?php echo $row['waist']; ?>"/>
WHR : 
<input type ="text" name="WHR" class="form-control" value="<?php echo $row['whr']; ?>"/>
Diabetese cause finding : 
<input type ="text" name="DIAB" class="form-control" value="<?php echo $row1['method']; ?>"/>
Red cough: 
<input type ="text" name="RC" class="form-control" value="<?php echo $row2['remarks']; ?>"/>
Breast exam thought : 
<input type ="text" name="BT" class="form-control" value="<?php echo $row3['date']; ?>"/>
Breast exam finished : 
<input type ="text" name="BF" class="form-control" value="<?php echo $row3['taught']; ?>"/><br>
<strong> Maternal and Child Health</strong><br>
A. Pregnant seen/Given HBMR<br>
1st trimester : <input type ="text" name="P1" class="form-control"><br>
2nd trimester : <input type ="text" name="P2" class="form-control"><br>
3nd trimester : <input type ="text" name="P3" class="form-control"><br>
</div><div class="col-sm-3">
A. Pregnant<br>
Within 24 hours : <input type ="text" name="PA1" class="form-control"><br>
Within 1 week : <input type ="text" name="PA2" class="form-control"><br>
B1. Initiated Breastfeeding<br>
Within 24 hours : <input type ="text" name="PB1" class="form-control"><br>
C. Child Given ECCD Card : <input type ="text" name="ECD" class="form-control" value="<?php echo $row4['id']; ?>"><br>
<strong>D. Family Planning<br></strong>
Motivated <input type ="text" name="FMot" class="form-control" value="<?php echo $row5['status']; ?>"><br>
New Acceptor <input type ="text" name="FNew" class="form-control" value="<?php echo $row6['status']; ?>"><br>
Old Acceptor <input type ="text" name="FOld" class="form-control" value="<?php echo $row7['status']; ?>"><br>
<strong>E. Mga Nagkasakit (Bata 0-5 years old)<br></strong>
Ubo :<input type ="text" name="Ubo" class="form-control" value="<?php echo $row8['disease']; ?>"><br>
</div><div class="col-sm-3">
Ginawa : <input type ="text" name="Ginawa1" class="form-control"><br>
Nagtatae :<input type ="text" name="Tae" class="form-control" value="<?php echo $row9['disease']; ?>"><br>
Ginawa : <input type ="text" name="Ginawa2" class="form-control"><br>
<strong>F. Iba pang sakit na nakita/Isinangguni<br></strong>
Bulutong :<input type ="text" name="Ubo" class="form-control" value="<?php echo $row10['disease']; ?>"><br>
Tigdas :<input type ="text" name="Tigdas" class="form-control" value="<?php echo $row11['disease']; ?>"><br>
Beke :<input type ="text" name="Beke" class="form-control" value="<?php echo $row12['disease']; ?>"><br>
High Blood :<input type ="text" name="High Blood" class="form-control" value="<?php echo $row13['disease']; ?>"><br>
Diabetese :<input type ="text" name="Diabetese" class="form-control" value="<?php echo $row14['disease']; ?>"><br>
</div><div class="col-sm-3">
<strong>G. Animal Bite<br></strong>
Ilan :<input type ="text" name="Kagat" class="form-control" value="<?php echo $row15['animal']; ?>"><br>
Napabakunahan:<input type ="text" name="Bakuna" class="form-control" value="<?php echo $row16['vaccine']; ?>"><br>
Iba pang ginawa : <textarea rows="4" cols="50" name="iba" class="form-control">
	</textarea><br>
	<button type="submit" name="save" class="btn btn-warning"> Save Report</button><br><br>


</div>
</div>
</div>
</div>
</form>
</body>

</html>
