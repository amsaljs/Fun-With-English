<!DOCTYPE html>
<style>


.bulat{
border-radius:100em;
/*opacity:0.5;*/
border-top:2px solid #cf2031;
border-right:2px solid #0f7dc8;
border-bottom:2px solid #2eb31a;
border-left:2px solid #eab823;
width:160px;
height:160px;
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

<?php
    include("fungsi/config.php");
    $current_page="about";
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
                    <h1>About Us</h1>

                </div>
    </header>
	<!-- container -->

  <!-- container -->
  <section class="container">
      <div class="row">
          <!-- main content -->
          <section class="col-sm-8 maincontent">
            <h2>Sekilas Info</h2>
            <h4 class="sm-txt">Have Fun with English</h4>
              <p>
                Have Fun with English merupakan aplikasi pembelajaran bahasa Inggris yang interaktif. Aplikasi ini ditujukan untuk anak-anak berusia 6-12 tahun. Aplikasi ini menyediakan materi pembelajaran yang berkaitan dengan Bahasa Inggris seperti grammer, vocabulary, listening dan lain lain yang dilengkapi dengan soal-soal latihan berupa games. Dengan aplikasi ini, diharapkan anak-anak lebih tertarik dan nyaman dalam hal belajar Bahasa Inggris serta termotivasi untuk mengenal kosakata baru dalam Bahasa Inggris. Selain itu, dengan aplikasi ini kita dapat mengetahui sejauh mana pemahaman mereka dari materi yang diberikan.
              </p>

          </section>
          <!-- /main -->

          <!-- Sidebar -->
          <aside class="col-sm-4 sidebar sidebar-right">

              <div class="panel">
                    <img src="assets/images/about.jpg" alt="" class="img-rounded pull-right">
              </div>

          </aside>
          <!-- /Sidebar -->

      </div>
  </section>

<hr class="bottom-line">

       <div class="container">
         <center>
           <h2>Have Fun with English Developer</h2>
           <p>HALOOOOOOOOOOOOOOO!!!<br> Salam hangat dari kami :) </p>
         </center>

         <hr class="bottom-line">
      <!--  </div>
     </div> -->
     <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-4">
         <div class="pm-staff-profile-container">
           <div class="pm-staff-profile-image-wrapper text-center">
             <img class="bulat" src="assets/images/ket.jpg" />
           </div>
           <div class="pm-staff-profile-details text-center">
             <p class="pm-staff-profile-name">Amsal Jayadi Sihombing</p>
             <p class="pm-staff-profile-title"><b>Lead Software Engineer</b></p>

             <p class="pm-staff-profile-bio">Saya adalah seorang mahasiswa Institut Teknologi Del angkatan 2015. Program Study Sistem Informasi. Berasal dari Padang Sidempuan</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-4">
         <div class="pm-staff-profile-container">
           <div class="pm-staff-profile-image-wrapper text-center">
             <img class="bulat" src="assets/images/mentor2.jpg" />
           </div>
           <div class="pm-staff-profile-details text-center">
             <p class="pm-staff-profile-name">Wilda Sinaga</p>
             <p class="pm-staff-profile-title"><b>Bussiness Analyst</b></p>

             <p class="pm-staff-profile-bio">Saya adalah seorang mahasiswi Institut Teknologi Del angkatan 2015. Program Study Sistem Informasi. Saya berasal dari Lubuk Pakam</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-4">
         <div class="pm-staff-profile-container">
           <div class="pm-staff-profile-image-wrapper text-center">
             <img class="bulat" src="assets/images/mentor3.jpg" />
           </div>
           <div class="pm-staff-profile-details text-center">
             <p class="pm-staff-profile-name">Arsantya Agustina Saragih</p>
             <p class="pm-staff-profile-title"><b>Web Designer</b></p>

             <p class="pm-staff-profile-bio">Saya adalah seorang mahasiswi Institut Teknologi Del angkatan 2015. Program Study Sistem Informasi. Saya berasal dari Sitoluama</p>
           </div>
         </div>
       </div>
     </div>
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
