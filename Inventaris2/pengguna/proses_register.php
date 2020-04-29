<?php 
	include '../config/koneksi.php';

	$nis=$_POST['nis'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];

	$query="INSERT INTO tb_pengguna(nis,email,username,password,level) VALUES ('$nis','$email','$username','$password','$level')";
	$view = mysqli_query($conn,$query);

    if ($view) {
    	header('location:login.php');
    }else{
    	echo "gagal";
    }
 ?>