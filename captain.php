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
        <li class="active"><a data-toggle="tab" href="#home">Home</a>
        </li>
        <li><a data-toggle="tab" href="#register">Register</a>
        </li>
        <li><a data-toggle="tab" href="#changepassword">Change Password</a>
        </li>
        <li><a href="login.php">Logout</a>
        </li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
  <div class="container-fluid">

    <div class="tab-content">

        <div id="changepassword" class="tab-pane fade in">
            <div class="col-sm-"></div>
            <h3> Change Password </h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="col-sm-4">
                    <div class="form-group" autocomplete="off">
                        New Password:
                        <input type="text" name="password" autocomplete="off" class="form-control">
                        <br> Current Password:
                        <input type="password" autocomplete="off" name="password" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" name="changepassword" class="btn btn-primary"> Submit</button>
                        <button type="submit" name="save" class="btn btn-warning"> Cancel</button>
                    </div>
                </div>
            </form>
        </div>

        <div id="home" class="tab-pane fade in active">

            <div class="row">
                <div class="col-sm-6">
                    <strong><h3>Purok List</h3>
                    </strong>

                    <form action="cap.php" method="post">



                        <?php if( isset($_COOKIE[ 'user_brgy']) ) { echo '<input type="text" name="R_baranggay" class="form-control" value="'.$_COOKIE[ 'user_brgy']. '">'; } ?>
                        <br>
                        <table class="table table-condensed table-bordered table-hover table-striped">
                            <tr>
                                <th>Purok 1:</th>
                                <th>
                                    <input type="text" name="Purok1" class="form-control">
                                </th>
                                <tr>
                                    <th>Purok 2:</th>
                                    <th>
                                        <input type="text" name="Purok2" class="form-control">
                                    </th>
                                    <tr>
                                        <th>Purok 3:</th>
                                        <th>
                                            <input type="text" name="Purok3" class="form-control">
                                        </th>
                                        <tr>
                                            <th>Purok 4:</th>
                                            <th>
                                                <input type="text" name="Purok4" class="form-control">
                                            </th>
                                            <tr>
                                                <th>Purok 5:</th>
                                                <th>
                                                    <input type="text" name="Purok5" class="form-control">
                                                </th>
                                                <tr>
                                                    <th>Purok 6:</th>
                                                    <th>
                                                        <input type="text" name="Purok6" class="form-control">
                                                    </th>
                                                    <tr>
                                                        <th>Purok 7:</th>
                                                        <th>
                                                            <input type="text" name="Purok7" class="form-control">
                                                        </th>
                                                        <th>
                                                            <button type="submit" name="save" class="btn btn-warning"> Insert</button>
                                                        </th>
                        </table>


                    </form>

                </div>
            </div>
        </div>



        <div id="register" class="tab-pane fade">
                <h3>Register Account</h3>
                <form action="captainreg.php" method="post">
                    <div class="form-group">
                        First Name:
                        <input type="text" name="R_firstname" class="form-control"> Middle Name:
                        <input type="text" name="R_middlename" class="form-control"> Last Name:
                        <input type="text" name="R_lastname" class="form-control">
                        <div class="form-group">
                            Baranggay:
                            <?php if( isset($_COOKIE[ 'user_brgy']) ) { echo '<input type="text" name="R_baranggay" class="form-control" value="'.$_COOKIE[ 'user_brgy']. '">'; } ?> Number:
                            <input type="text" name="R_number" class="form-control"> Position:
                            <select name="Rpos" placeholder="Select Position" class="form-control">
                                <option class="form-control" value="" disabled selected hidden>Select Position</option>
                                <option value="BNS">BNS</option>
                                <option value="BHW">BHW</option>
                            </select>
                            <br> Username:
                            <input type="text" name="R_username" class="form-control"> Password:
                            <input type="text" name="R_password" class="form-control">
                            <?php $user='root' ; $pass='root' ; $db='rural' ; $bg= $_COOKIE['user_brgy']; $db=new mysqli('localhost', $user,$pass,$db); $result = $db->query("SELECT * FROM accounts where Baranggay='$bg'"); ?> 
                            Designate to Purok:
                            <select name="R_purok" placeholder="Designate to Purok" class="form-control">
                                <option class="form-control" value="" disabled selected hidden>Select Position</option>
                                <?php while ($row=$result->fetch_assoc()) {?>

                                <option value="<?php echo $row['Purok1']?>">
                                    <?php echo $row[ 'Purok1']?>
                                </option>
                                <option value="<?php echo $row['Purok2']?>">
                                    <?php echo $row[ 'Purok2']?>
                                </option>
                                <option value="<?php echo $row['Purok3']?>">
                                    <?php echo $row[ 'Purok3']?>
                                </option>
                                <option value="<?php echo $row['Purok4']?>">
                                    <?php echo $row[ 'Purok4']?>
                                </option>
                                <option value="<?php echo $row['Purok5']?>">
                                    <?php echo $row[ 'Purok5']?>
                                </option>
                                <option value="<?php echo $row['Purok6']?>">
                                    <?php echo $row[ 'Purok6']?>
                                </option>
                                <option value="<?php echo $row['Purok7']?>">
                                    <?php echo $row[ 'Purok7']?>
                                </option>
                                <?php } ?>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-primary"> Save</button>
                            <button type="submit" name="save" class="btn btn-warning"> Cancel</button>
                        </div>
                    </div>
                </form>
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
