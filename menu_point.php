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


  <div class="container" >
          <h3 align="left">Informasi Pembayaran: </h3><br>
          <h4 align="left">Nomor Rekening : 88305012276</h4> <br>
          <h4 align="left">A.n : Fun With English</h4> <br>
          <h4 align="left">BANK : BRI</h4>

        <hr>
        <h1>Daftar Voucher Point</h1>

        <table style="background-color: white" cellpadding="10px" border="0" width="100%">
        <tr style="background-color: #A9D454;color: white">


          <th>Point</th>
          <th >Price</th>
           <th>Aksi</th>

        </tr>
        <?php


        $query = "SELECT * FROM point"; // Query untuk menampilkan semua data siswa
        $sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query

        $kuota=100;
        while($data = mysqli_fetch_array($sql)){?>

          <tr>
            <td width="400"><h4><?php echo $data['point'];?></h4></td>
            <td align="left"><h4>Rp <?php echo $data['price'];?>,00</h4></td>
            <td width="40px"><a class="btn btn-lg btn-icon biru" href="fungsi/buy_proses.php?nomer=<?php echo $data['id_point'];?>" onclick="return confirm('Are you sure to buy? ')">Buy</a></td>

          </tr>


       <?php } ?>
        </table>
        <br>
        <h1>History Transaction</h1>
        <table style="background-color: white" cellpadding="5px" border="0" width="100%">
          <?php

              $username = $_SESSION['username'];
              $query2 = "SELECT id from users WHERE username='$username'";
              $sql2 = mysqli_query($mysqli, $query2);
              $id_user = mysqli_fetch_array($sql2);
              $id = $id_user['id'];


              $query = "SELECT * FROM transaksi where id_user = $id"; // Query untuk menampilkan semua data siswa
              $sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query

           ?>

        <tr style="background-color: green;color: white">
          <th>No</th>
          <th>Point</th>
          <th>Total Price</th>
          <th>Status</th>
          <th>Date</th>
          <th>Confirmation</th>

        </tr>
        <?php
        $no=0;
        while($data = mysqli_fetch_array($sql)){?>
          <?php $no++;
            $cek=$data['bukti'];
          ?>
          <tr>
            <td> <?php echo $no; ?></td>
            <td ><?php echo $data['jumlah_req'];?></td>
            <td align="left">Rp <?php echo $data['harga']?>,00</td>
            <td> <?php echo $data['status'];?></td>
            <td><?php echo $data['tgl_trans'];?></td>
            <?php
                if($cek==NULL){
                  echo "<td><a href='upload_bukti.php?id_trans=".$data['id_trans']."'>Upload</a></td>";
                }
                else {
                  echo "<td>Finish</td>";
                }
             ?>


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
