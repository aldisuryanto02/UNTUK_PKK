<?php 

	session_start();
	 
	include '../config/koneksi.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$login = mysqli_query($conn,"SELECT * FROM tb_pengguna WHERE username='$username' AND password='$password'");
	$cek = mysqli_num_rows($login);
	 
	if($cek > 0){
	 
		$data = mysqli_fetch_assoc($login);
	 
		if($data['level']=="admin"){
	 
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:admin/index.php");
	 
		}else if($data['level']=="user"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "user";
			header("location:user/index.php");
	 
		}else if($data['level']=="operator"){
			$_SESSION['username']=$username;
			$_SESSION['level']="operator";
			header("location:operator/index.php");
		}
	}else{
		header("location:login.php?pesan=gagal");
	}
 
?>