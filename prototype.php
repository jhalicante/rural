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
        <li class="active"><a data-toggle="pill" href="#home"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a data-toggle="pill" href="#menu1"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content">  
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <h3>HOME</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>Menu 1</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>Menu 2</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div id="menu3" class="tab-pane fade">
          <h3>Menu 3</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
    </section>
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
