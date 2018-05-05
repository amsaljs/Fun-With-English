<!DOCTYPE html>
<?php
    include("fungsi/config.php");
    $current_page="story";
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
                    <h1>Stories</h1>
                    <p>Do you like listening to songs in English? Singing songs is a great way to get better at speaking English and we have lots of great songs for you to enjoy.</p>
                </div>
    </header>
	<!-- container -->

	 <div class="container">
     <ul class="list-unstyled video-list-thumbs row" style="margin-top:30px;">
         <li class="col-lg-3 col-sm-4 col-xs-6">
           <?php $id_story=1 ?>
           <a href="fungsi/ceklis_story.php?id_story=<?php echo $id_story ?>" onclick="return confirm('Are you sure to access this story? Your point will decrease by 5')" title="Ali and the magic carpet">
             <img src="assets/images/img/story/ali.png" alt="Barca" class="img-responsive" height="130px" />
            <label style="margin-top:15px; color:#333">Ali and the magic carpet</label>
             <span class="play-button"></span>
             <span class="duration">03:15</span>
           </a>
         </li>
         <li class="col-lg-3 col-sm-4 col-xs-6">
           <?php $id_story=2 ?>
           <a href="fungsi/ceklis_story.php?id_story=<?php echo $id_story ?>" onclick="return confirm('Are you sure to access this story? Your point will decrease by 5')" title="ABC Zoo">
             <img src="assets/images/img/story/abc.png" alt="Barca" class="img-responsive" height="130px" />
             <label style="margin-top:15px; color:#333">ABC Zoo</label>
             <span class="play-button"></span>
             <span class="duration">03:15</span>
           </a>
         </li>
         <li class="col-lg-3 col-sm-4 col-xs-6">
           <?php $id_story=3 ?>
           <a href="fungsi/ceklis_story.php?id_story=<?php echo $id_story ?>" onclick="return confirm('Are you sure to access this story? Your point will decrease by 5')" title="Buzz and Bob's big adventure">
             <img src="assets/images/img/story/buzz.png" alt="Barca" class="img-responsive" height="130px" />
             <label style="margin-top:15px; color:#333">Buzz and Bob's big adventure</label>
             <span class="play-button"></span>
             <span class="duration">03:15</span>
           </a>
         </li>
         <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
           <?php $id_story=4 ?>
           <a href="fungsi/ceklis_story.php?id_story=<?php echo $id_story ?>" onclick="return confirm('Are you sure to access this story? Your point will decrease by 5')" title="Dinosaur Dig">
             <img src="assets/images/img/story/dinosaur.png" alt="Barca" class="img-responsive" height="130px" />
             <label style="margin-top:15px; color:#333">Dinosaur Dig</label>
             <span class="play-button"></span>
             <span class="duration">03:15</span>
           </a>
         </li>
         <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
           <?php $id_story=5 ?>
           <a href="fungsi/ceklis_story.php?id_story=<?php echo $id_story ?>" onclick="return confirm('Are you sure to access this story? Your point will decrease by 5')" title="A dog Life">
             <img src="assets/images/img/story/dog.png" alt="Barca" class="img-responsive" height="130px" />
             <label style="margin-top:15px; color:#333">A dog Life</label>
             <span class="play-button"></span>
             <span class="duration">03:15</span>
           </a>
         </li>
         <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
           <?php $id_story=6 ?>
           <a href="fungsi/ceklis_story.php?id_story=<?php echo $id_story ?>" onclick="return confirm('Are you sure to access this story? Your point will decrease by 5')" title="Eric the engine">
             <img src="assets/images/img/story/eric.png" alt="Barca" class="img-responsive" height="130px" />
             <label style="margin-top:15px; color:#333">Eric the engine</label>
             <span class="play-button"></span>
             <span class="duration">03:15</span>
           </a>
         </li>
         <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
           <?php $id_story=7 ?>
           <a href="fungsi/ceklis_story.php?id_story=<?php echo $id_story ?>" onclick="return confirm('Are you sure to access this story? Your point will decrease by 5')" title="I'm too ill">
             <img src="assets/images/img/story/ill.png" alt="Barca" class="img-responsive" height="130px" />
             <label style="margin-top:15px; color:#333">I'm too ill</label>
             <span class="play-button"></span>
             <span class="duration">03:15</span>
           </a>
         </li>
         <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
           <?php $id_story=8 ?>
           <a href="fungsi/ceklis_story.php?id_story=<?php echo $id_story ?>" onclick="return confirm('Are you sure to access this story? Your point will decrease by 5')" title="MidSummer">
             <img src="assets/images/img/story/midsummer.png" alt="Barca" class="img-responsive" height="130px" />
             <label style="margin-top:15px; color:#333">MidSummer</label>
             <span class="play-button"></span>
             <span class="duration">03:15</span>
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
