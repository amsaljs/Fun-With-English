<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/fwe3.png"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">


<?php

 

						if(isset($_SESSION['username'])){
							$nama = $_SESSION['username'];
									if($_SESSION['username']=='admin') {?>
									<?php 
								          $query = "SELECT * FROM transaksi where status!='Dikirim'"; // Query untuk menampilkan semua data siswa
								          $sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query
								          // $row = mysqli_fetch_array($sql);

								          $count=0;

								          while($data = mysqli_fetch_array($sql)){?>
								          <?php
								        	  $count++;
								              $status =$data['status'];

								            ?>

								        <?php }
         								
         								$jumlah = $count; ?>

										<li class="c1 <?php if ($current_page=="beranda") echo "active" ?>"><a href="index.php">Home</a></li>
										<li class="c2 <?php if ($current_page=="user") echo "active" ?>"><a href="user.php">User</a></li>
										<li class="c3 <?php if ($current_page=="transaksi") echo "active" ?>"><a href="transaksi.php">Transaction &nbsp;<label style="color:yellow;"><?php echo $jumlah; ?></label></a></li>
						          		<li><a href="fungsi/process-logout.php" style="color: white; margin-right:-20px; font-style:italic;">Logout</a></li>';

									<?php }
									else{ ?>

										<li class="c1 <?php if ($current_page=="beranda") echo "active" ?>"><a href="index.php">Home</a></li>
										<li class="c2 <?php if ($current_page=="about") echo "active" ?>"><a href="about.php">About</a></li>
										<li class="c8 <?php if ($current_page=="profil") echo "active" ?>"><a href="profil.php">Profile</a></li>
										<li class="c3 <?php if ($current_page=="video") echo "active" ?>"><a href="videos.php">Videos</a></li>
										<li class="c4 <?php if ($current_page=="game") echo "active" ?>"><a href="games.php">Games</a></li>
										<li class="c5 <?php if ($current_page=="story") echo "active" ?>"><a href="story.php">Stories</a></li>
						          		<li class="c7 <?php if ($current_page=="song") echo "active" ?>"><a href="song.php">Songs</a></li>
						          		<li><a href="fungsi/process-logout.php" style="color: white; margin-right:-20px; font-style:italic;">Logout</a></li>';
									<?php }
									}
									else{?>




								<li class="daftar <?php if ($current_page=="daftar") echo "active" ?>"><a href="daftar.php">Daftar</a></li>
								<li class="login <?php if ($current_page=="login") echo "active" ?>"><a href="login.php">Login</a></li>

							<?php } ?>



				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
