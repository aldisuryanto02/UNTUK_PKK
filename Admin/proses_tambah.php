<?php 
	include '../config/koneksi.php';

	$id=$_POST['id'];
	$nis=$_POST['nis'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$level=$_POST['level'];

	$query="INSERT INTO tb_user(id,nis,nama,email,username,password,level) VALUES ('$id','$nis','$nama','$email','$user','$pass','$level')";

	$hasil=mysqli_query($conn,$query);

	if ($hasil) {
		header("location:pengguna_operator.php");
	}else{
		echo "gagal";
	}
 ?>