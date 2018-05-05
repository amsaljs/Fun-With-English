<!DOCTYPE html>

<?php
	// include("fungsi/function.php");
	$current_page="daftar";
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
</head><!--/head-->

<body>
	<?php
		include('header.php')
	 ?>

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="login-form"><!--login form-->
						<h1>Signup</h1>
						<p>Please fill out the following fields to signup:</p>
						<form action="process-daftar.php" method="POST" enctype="multipart/form-data">
							<h4>Username</h4>
							<input type="text" name="username" required>
							<h4>Password</h4>
							<input type="password" name="password1" required>
							<h4>Name</h4>
							<input type="text" name="nama" required>
							<h4>Address</h4>
							<input type="text" name="address" required>
							<h4>Email</h4>
							<input type="email" name="email" required>
							<h4>Birthdate</h4>
							<input type="date" name="birthdate" required>
							<h4>Pictures</h4>
							<input type="file" name="gambar">

							<button type="submit" class="btn btn-default">Daftar</button>
						</form>
					</div>
				</div>
		</div>
	</section>

	<?php
		include('footer.php')
	 ?>

    <script src="assets/js/modernizr-latest.js"></script>
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>

    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='assets/js/camera.min.js'></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
