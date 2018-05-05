<!DOCTYPE html>

  <?php
    include("fungsi/config.php");

    $current_page="user";
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
 <!--  <header id="head" class="secondary">
            <div class="container">
                    <h1>User</h1>
                    
                </div>
    </header> -->



  <div class="container" >
        


        <table style="background-color: white"  border="0" width="100%">
          <?php

              $query = "SELECT * FROM users where nama != 'Admin'"; // Query untuk menampilkan semua data user
              $sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query
              // $row = mysqli_fetch_array($sql);
              // $status = $row['status'];
           ?>

        <tr style="background-color: green;color: white">


          <th>#</th>
          <th>Nama User</th>
          <th>Username</th>
          <th>Email</th>
          <th>Total Point</th>

        </tr>
        <?php
        $no=0;
        while($data = mysqli_fetch_array($sql)){?>
          <?php $no++;
             
          ?>
          <tr>
            <td> <?php echo $no; ?></td>
            <td> <?php echo $data['nama'];?></td>
            <td> <?php echo $data['username'];?></td>
            <td> <?php echo $data['email']?></td>
            <td> <?php echo $data['jumlah_point'];?></td>
           
          </tr>


       <?php } ?>
        </table>

      </div>
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
