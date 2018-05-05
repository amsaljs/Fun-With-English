<!DOCTYPE html>

  <?php
    include("fungsi/config.php");

    $current_page="transaksi";
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



  <div class="container" >
        


        <table style="background-color: white"  border="0" width="100%">
          <?php

              $query = "SELECT * FROM transaksi where status != 'Dikirim'"; // Query untuk menampilkan semua data siswa
              $sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query
              // $row = mysqli_fetch_array($sql);
              // $status = $row['status'];
           ?>

        <tr style="background-color: green;color: white">


          <th>No</th>
          <th>Id User</th>
          <th>Point</th>
          <th>Total Price</th>
          <th>Status</th>
          <th>Bukti </th>
          <th>Date</th>
          <th>Confirmation</th>

        </tr>
        <?php
        $no=0;
        while($data = mysqli_fetch_array($sql)){?>
          <?php $no++;
              $gambar=$data['bukti'];
          ?>
          <tr>
            <td> <?php echo $no; ?></td>
            <td ><?php echo $data['id_user'];?></td>
            <td ><?php echo $data['jumlah_req'];?></td>
            <td align="left">Rp <?php echo $data['harga']?>,00</td>
            <td>
              <?php
                echo $data['status'];
              ?>
            </td>
            <td> <?php echo '<img src="images/'.$gambar.'" width="200" height="100">' ?></td>
            <td><?php echo $data['tgl_trans'];?></td>
            <td>
              <a href="form_tambah_point.php?id_user=<?php echo $data['id_user'];?>">Tambah Point</a> <br>
              <a href="form_ubah_status.php?id_trans=<?php echo $data['id_trans'];?>">Ubah Status</a>
            </td>

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
