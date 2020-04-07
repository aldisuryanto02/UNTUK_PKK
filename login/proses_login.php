<?php 

	session_start();
	 
	include '../config/koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	 
	$login = mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' AND password='$password' AND level='$level'");
	$cek = mysqli_num_rows($login);
	 
	if($cek > 0){
	 
		$data = mysqli_fetch_assoc($login);
	 
		if($data['level']=="admin"){ 
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:../Admin/index.php");
	 
		}else if($data['level']=="operator"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "operator";
			header("location:../Operator/index.php");
	 
		}else if($data['level']=="user"){
			$_SESSION['username']=$username;
			$_SESSION['level']="user";
			header("location:../Siswa/index.php");
		}
	}else{
		header("location:index.php?pesan=gagal");
	}
 
?>