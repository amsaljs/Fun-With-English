<!DOCTYPE html>

  <?php
    include("fungsi/config.php");

    $current_page="transaksi";
    $id = $_GET['id_user'];
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



<div class="container">

        <h1>Tambah Point User</h1>
        <form method="post" action="fungsi/proses_simpan_point.php?id=<?php echo $id; ?>" enctype="multipart/form-data">

            <?php
                  $query = "SELECT * FROM transaksi"; // Query untuk menampilkan semua data siswa
                  $sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query
                  $row = mysqli_fetch_array($sql);
             ?>

        <table cellpadding="8">
        <tr>
          <td>Id User</td>
          <td>
            <input type="text" name="id" value="<?php echo $id ?>">
          </td>
        </tr>

        <tr>
          <td>Point</td>
          <td>
            <div class="form-group">
                    <select name="jumlah_point">
                      <option>Pilih Point </option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                      <option value="150">150</option>
                      <option value="200">200</option>
                      <option value="500">500</option>
                      <option value="1000">1000</option>
                      <option value="2000">2000</option>

                    </select>
              </div>
          </td>
        </tr>
        </table>

        <hr>
        <input type="submit" value="Tambah">
        <a href="transaksi.php"><input type="button" value="Batal"></a>
        </form>

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
