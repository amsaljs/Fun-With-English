<?php
    include("fungsi/config.php");
    $current_page="game";
  ?>

<!DOCTYPE html>
<style>


.bulat{
border-radius:100em;
/*opacity:0.5;*/
border-top:2px solid #cf2031;
border-right:2px solid #0f7dc8;
border-bottom:2px solid #2eb31a;
border-left:2px solid #eab823;
width:180px;
height:180px;
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
                    <h1>Games</h1>
                    <p>Do you like watching videos in English? Watching videos is a great way to practise your English and learn new things about interesting topics. We have lot of great videos here for you to watch</p>
                </div>
    </header>
	<!-- container -->

  <div class="container">
    <ul class="list-unstyled game-list-thumbs row" style="margin-top:30px;">
        <li class="col-lg-3 col-sm-4 col-xs-6">
          <?php $id_game=1 ?>
          <a href="fungsi/ceklis_game.php?id_game=<?php echo $id_game ?>" onclick="return confirm('Are you sure to access this game? Your point will decrease by 5')" title="Clean and Green">
            <img src="assets/images/img/game/clean.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333; padding-left:50px">Clean and Green</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-sm-4 col-xs-6">
          <?php $id_game=2 ?>
          <a href="fungsi/ceklis_game.php?id_game=<?php echo $id_game ?>" onclick="return confirm('Are you sure to access this game? Your point will decrease by 5')" title="Fruit">
            <img src="assets/images/img/game/fruit.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333; padding-left:90px">Fruit</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-sm-4 col-xs-6">
          <?php $id_game=3 ?>
          <a href="fungsi/ceklis_game.php?id_game=<?php echo $id_game ?>" onclick="return confirm('Are you sure to access this game? Your point will decrease by 5')" title="Family">
            <img src="assets/images/img/game/family.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333; padding-left:80px">Family</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_game=4 ?>
          <a href="fungsi/ceklis_game.php?id_game=<?php echo $id_game ?>" onclick="return confirm('Are you sure to access this game? Your point will decrease by 5')" title="Chores">
            <img src="assets/images/img/game/chores.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333; padding-left:90px">Chores</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6" >
          <?php $id_game=5 ?>
          <a href="fungsi/ceklis_game.php?id_game=<?php echo $id_game ?>" onclick="return confirm('Are you sure to access this game? Your point will decrease by 5')" title="Christmas">
            <img src="assets/images/img/game/christmas.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333; padding-left:50px" >Christmas</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_game=6 ?>
          <a href="fungsi/ceklis_game.php?id_game=<?php echo $id_game ?>" onclick="return confirm('Are you sure to access this game? Your point will decrease by 5')" title="Job">
            <img src="assets/images/img/game/job.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333; padding-left:90px">Job</label>
            <span class="play-button"></span>

          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_game=7 ?>
          <a href="fungsi/ceklis_game.php?id_game=<?php echo $id_game ?>" onclick="return confirm('Are you sure to access this game? Your point will decrease by 5')" title="Road">
            <img src="assets/images/img/game/road.png" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333; padding-left:90px">Road</label>
            <span class="play-button"></span>
          </a>
        </li>
        <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
          <?php $id_game=8 ?>
          <a href="fungsi/ceklis_game.php?id_game=<?php echo $id_game ?>" onclick="return confirm('Are you sure to access this game? Your point will decrease by 5')" title="Part of Body">
            <img src="assets/images/img/game/body.jpg" class="bulat" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333; padding-left:60px">Part of Body</label>
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
