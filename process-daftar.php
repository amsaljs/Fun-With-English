<?php

include("fungsi/config.php");

$nama = $_POST['nama'];
$username = $_POST['username'];
$pass1 = $_POST['password1'];
$add = $_POST['address'];
$date = $_POST['birthdate'];
$email = $_POST['email'];
$foto = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

$point=20;

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;


$cekuser = mysqli_query($mysqli,"SELECT * FROM users WHERE username = '$username'");

	if(mysqli_num_rows($cekuser) <> 0) {

		echo "<script> location='daftar.php';alert('Username has already exists');</script>";

	} else {

		if(!$username || !$pass1 || !$date || !$add || !$email) {

			echo "<script> location='daftar.php';alert('Username has already exists');</script>";

		} else {
			if(move_uploaded_file($tmp, $path)){

			$simpan = mysqli_query($mysqli,"INSERT INTO users(username, password1, address, birthdate, email, nama, jumlah_point, gambar, created_date) VALUES('$username','$pass1', '$add', '$date', '$email', '$nama', '$point','$fotobaru', NOW())");

				if($simpan) {
					echo "<script> location='login.php';alert('Register Success, now you can Log in in this website');</script>";
				} else {
					echo "Proses Gagal!";
				}
			}
		}

		}

?>
