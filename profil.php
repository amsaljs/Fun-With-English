<!DOCTYPE html>

  <?php
    include("fungsi/config.php");

    $current_page="profil";
  ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Free School Responsive Web Template Kiddo</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'>


  <link href="assets/csss/main.css" rel="stylesheet">
  <link href="assets/csss/Responsive.css" rel="stylesheet">


</head>
<body>
	<?php include('header.php'); ?>
  <header id="head" class="secondary">
            <div class="container">
                    <h1>PROFILE</h1>
                    
                </div>
    </header>

  <?php
        $username = $_SESSION['username'];
        $query2 = "SELECT * from users WHERE username='$username'";
        $sql2 = mysqli_query($mysqli, $query2);
       

    ?>


  <section class="container" style="margin-top: 30px"><!--slider-->

   <?php
     while($data = mysqli_fetch_array($sql2)){?>

  <div class="row">
    <div class="col-md-8">
      <div class="profil-border">
        <img src="assets/images/fwe3.png">
        <div class="row" style="background-color: #E1E1E1">
          <div class="col-md-4" ">
              <h3 class="text-biasa" align="left" style="padding-left: 30px; " >Nama</h3>
          </div>
          <div class="col-md-1">
              <h3 class="text-biasa" >:</h3>
          </div>
                <h3 class="text-biasa" ><?php echo $data['nama'];  ?></h3>
        </div>
        <div class="row">
          <div class="col-md-4" >
              <h3 class="text-biasa" style="padding-left: 30px" align="left" >Username</h3>
          </div>
          <div class="col-md-1">
              <h3 class="text-biasa" >:</h3>
          </div>
              <h3 class="text-biasa" ><?php echo $data['username'];  ?></h3>

        </div>

        <div class="row" style="background-color: #E1E1E1">
          <div class="col-md-4" >
              <h3 class="text-biasa" style="padding-left: 30px" align="left" >Address</h3>
          </div>
          <div class="col-md-1">
              <h3 class="text-biasa" >:</h3>
          </div>
              <h3 class="text-biasa" ><?php echo $data['address'];  ?></h3>

        </div>
        <div class="row">
          <div class="col-md-4">
              <h3 class="text-biasa" style="padding-left: 30px" align="left" >Email</h3>
          </div>
          <div class="col-md-1">
              <h3 class="text-biasa" >:</h3>
          </div>
              <h3 class="text-biasa" ><?php echo $data['email'];  ?></h3>

        </div>
        <div class="row" style="background-color: #E1E1E1">
          <div class="col-md-4">
              <h3 class="text-biasa" align="left" style="padding-left: 30px" >Birthdate</h3>
          </div>
          <div class="col-md-1">
              <h3 class="text-biasa" >:</h3>
          </div>
              <h3 class="text-biasa" ><?php echo $data['birthdate'];  ?></h3>
        </div>
        <div class="row">
          <div class="col-md-4">
              <h3 class="text-biasa" align="left" style="padding-left: 30px" >Point</h3>
          </div>
          <div class="col-md-1">
              <h3 class="text-biasa" >:</h3>
          </div>
              <h3 class="text-biasa" ><?php echo $data['jumlah_point'];  ?> Point &nbsp; &nbsp; &nbsp; <a href="menu_point.php"> Add point</a></h3>
              
        </div>

      </div>
    </div>

    <div class="col-md-4">
      <div class="profil-border" >
        <h2 class="text-biasa" align="center">Profile Picture</h2>
      <?php echo '<img src="images/'.$data["gambar"].'" width="340" height="300" style="margin-top:5px">' ?>
        
      </div>
    </div>

   
  </div>

<?php } ?>


  </div>

  </div>
      </section>

<?php include('footer.php') ?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script>
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>

    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='assets/js/camera.min.js'></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){

			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});

	</script>

</body>
</html>
