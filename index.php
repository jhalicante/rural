
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="t/css/vendor-bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="t/css/half-slider.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img style="   width: 50px;" src="t/Images/Image.png" alt="Logo Image"></a>
            Integrated Rural Health and Nutrition Information System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reports.php">Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="statistics.php">Statistics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php?mode=register">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php
        $user = 'root';
        $pass = 'root';
        $db ='rural';

        $db = new mysqli('localhost', $user,$pass,$db) or die("Unable to connect!");

        $Arrresult = $db->query("SELECT * FROM `announcement`");
        $activeArr = 'active';
        $Arri = 0;
            while ($Arrorow = $Arrresult->fetch_assoc()) {
                if($Arri == 1) {
                    $activeArr = '';
                }
        ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $Arri; ?>" class="<?php echo $activeArr ?>"></li>
        <?php
            }     
        ?>
        </ol>
        <div class="carousel-inner" role="listbox">

        <?php 
        $result = $db->query("SELECT * FROM `announcement`");
        $active = 'active';
        $i = 0;
            while ($row = $result->fetch_assoc()) {
                if($i == 1) {
                    $active = '';
                }
        ?>
          <div class="carousel-item  bg-dark <?php echo $active; ?>" style="background-repeat: no-repeat; background-size: 1900px 1080px; background-image: url('<?php echo 't/uploaded/'.$row['image1'].''.$row['image2'].''.$row['image3'].''.$row['image4'].''.$row['image5']; ?>')">
            <div class="carousel-caption d-none d-md-block bg-overlay bg-dark">
              <h3><?php echo $row['title1'].''.$row['title2'].''.$row['title3'].''.$row['title4'].''.$row['title5']; ?></h3>
              <p><?php echo $row['announcement1'].''.$row['announcement2'].''.$row['announcement3'].''.$row['announcement4'].''.$row['announcement5']; ?></p>
            </div>
          </div>

        <?php
            $i++;
            }     
        ?>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1 class="text-center">See the latest announcement</h1>
        <p class="text-center">
            Integrated Rural Health and Nutrition Information System            
        </p>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="t/js/jquery.min.js"></script>
    <script src="t/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
