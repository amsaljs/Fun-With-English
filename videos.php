<!DOCTYPE html>
<?php
    include("fungsi/config.php");
    $current_page="video";
  ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Free School Web Template Kiddo</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />
	<link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<?php include('header.php'); ?>

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Videos</h1>
                    <p>Do you like watching videos in English? Watching videos is a great way to practise your English and learn new things about interesting topics. We have lot of great videos here for you to watch.</p>
                </div>
    </header>
	<!-- container -->

  <div class="container">
    <ul class="list-unstyled video-list-thumbs row" style="margin-top:30px;">
        <li class="col-lg-3 col-sm-4 col-xs-6">
          <?php $id_video=1 ?>
          <a href="fungsi/ceklis_video.php?id_video=<?php echo $id_video ?>" onclick="return confirm('Are you sure to access this video? Your point will decrease by 8')" title="Claudio Bravo, antes su debut con el Barça en la Liga">
            <img src="assets/images/internet.png" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Five Internet Safety Tips FOR Kids</label>
            <span class="play-button"></span>
            <span class="duration">00:43</span>
          </a>
        </li>
        <li class="col-lg-3 col-sm-4 col-xs-6">
          <?php $id_video=2 ?>
          <a href="fungsi/ceklis_video.php?id_video=<?php echo $id_video ?>" onclick="return confirm('Are you sure to access this video? Your point will decrease by 8')" title="Claudio Bravo, antes su debut con el Barça en la Liga">
            <img src="assets/images/boy.png" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">2 boys from syria and germany</label>
            <span class="play-button"></span>
            <span class="duration">01:38</span>
          </a>
        </li>
        <li class="col-lg-3 col-sm-4 col-xs-6">
          <?php $id_video=3 ?>
          <a href="fungsi/ceklis_video.php?id_video=<?php echo $id_video ?>" onclick="return confirm('Are you sure to access this video? Your point will decrease by 8')" title="Claudio Bravo, antes su debut con el Barça en la Liga">
            <img src="assets/images/change.png" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Change the world in five minutes</label>
            <span class="play-button"></span>
            <span class="duration">04:32</span>
          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_video=4 ?>
          <a href="fungsi/ceklis_video.php?id_video=<?php echo $id_video ?>" onclick="return confirm('Are you sure to access this video? Your point will decrease by 8')" title="Claudio Bravo, antes su debut con el Barça en la Liga">
            <img src="assets/images/stay.png" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">How to Stay Clean in Space</label>
            <span class="play-button"></span>
            <span class="duration">02:10</span>
          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_video=5 ?>
          <a href="fungsi/ceklis_video.php?id_video=<?php echo $id_video ?>" onclick="return confirm('Are you sure to access this video? Your point will decrease by 8')" title="Claudio Bravo, antes su debut con el Barça en la Liga">
            <img src="assets/images/memorise.png" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">How to Memorise Anything</label>
            <span class="play-button"></span>
            <span class="duration">02:24</span>
          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_video=6 ?>
          <a href="fungsi/ceklis_video.php?id_video=<?php echo $id_video ?>" onclick="return confirm('Are you sure to access this video? Your point will decrease by 8')" title="Claudio Bravo, antes su debut con el Barça en la Liga">
            <img src="assets/images/pet.png" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">My Pet and Me Guinea Pigs</label>
            <span class="play-button"></span>
            <span class="duration">01:04</span>
          </a>
        </li>
       </ul>
  </div>
 <!-- /container -->
 <?php include('footer.php') ?>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/jquery.isotope.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
