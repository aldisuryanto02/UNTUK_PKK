<?php 
	include("header/header.php"); ?>

 <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>

 <style>
 	.content h1{
 		margin-right: 25%;
 		padding-top: 14%;
 	}
 	.luar .content{
 		height: 640px;
 	}
 </style>
 <div class="luar">
 	<div class="content">
 		<h1>Selamat Datang <?php echo  $_SESSION['username'] ?>!</h1>
 	</div>
 </div>

  <?php 
 	include("../footer/footer.php")
  ?>

