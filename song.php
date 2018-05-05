<!DOCTYPE html>
<?php
    include("fungsi/config.php");
    $current_page="song";
  ?>
  <style>


.bulat{
  border-radius:100em;
  /*opacity:0.5;*/
  border-top:2px solid #cf2031;
  border-right:2px solid #0f7dc8;
  border-bottom:2px solid #2eb31a;
  border-left:2px solid #eab823;
  width:190px;
  height:190px;
  }

  table{
      border: none;
      text-align: center;
      float: center;
      width: 1100px;
    }

  h3.det-txt {
      font-size: 40px;
      font-weight: bold;
      text-transform: uppercase;
    }
    h4.sm-txt {
      color: black;
      font-size: 24px;
    }
    .section-padding{
    padding: 60px 0px;
  }
  .header-section p{
          font-size: 14px;
      }
      p.det-p {
      padding: 40px 0px;
  }
  .circle{
    border-radius: 50%;
    -moz-border-radius :20%;
    -webkit-border-radius :50%;
    width: 500px;
    height: 400px;
    }
  </style>

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
  <?php include('header.php') ?>
		<header id="head" class="secondary">
            <div class="container">
                    <h1>Songs</h1>
                    <p>Do you like listening to songs in English? Singing songs is a great way to get better at speaking English and we have lots of great songs for you to enjoy.</p>
                </div>
    </header>
	<!-- container -->

  <div class="container">
    <ul class="list-unstyled song-list-thumbs row" style="margin-top:30px;">
        <li class="col-lg-3 col-sm-4 col-xs-6">
          <?php $id_song=1 ?>
          <a href="song/bear.php" title="A bear named Sue">
            <img src="assets/images/img/song/s1.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">A bear named Sue</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-sm-4 col-xs-6">
          <?php $id_song=2 ?>
          <a href="song/abra.php" title="Abracadabra">
            <img src="assets/images/img/song/s2.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Abracadabra</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-sm-4 col-xs-6">
          <?php $id_song=3 ?>
          <a href="song/hero.php" title="Amazing hero">
            <img src="assets/images/img/song/s3.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Amazing hero</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_song=4 ?>
          <a href="song/house.php" title="Animal House">
            <img src="assets/images/img/song/s4.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Animal House</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_song=5 ?>
          <a href="song/bean.php" title="Bean bag hello">
            <img src="assets/images/img/song/s5.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Bean bag hello</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_song=6 ?>
          <a href="song/brush.php" title="Brush bus">
            <img src="assets/images/img/song/s6.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Brush bus</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_song=6 ?>
          <a href="song/cake.php" title="Chocolate cake">
            <img src="assets/images/img/song/s7.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Chocolate cake</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_song=6 ?>
          <a href="song/dean.php" title="CDean and Pearl">
            <img src="assets/images/img/song/s8.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Dean and Pearl</label>
            <span class="play-button"></span>

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
