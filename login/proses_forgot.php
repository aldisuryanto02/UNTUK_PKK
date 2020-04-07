<?php 
	include '../config/koneksi.php';	
	$email=$_POST['email'];

	$query=mysqli_query($conn,"SELECT * FROM tb_user WHERE email='$email'");
	$cek=mysqli_num_rows($query);

	if ($query) {
		header("location:ubah_password.php");
	}else{
		echo "gagal";
	}
	
 ?>