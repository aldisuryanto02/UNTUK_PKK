<?php 
	include_once("../config/koneksi.php");

	$id =$_GET['id'];

	$query= "DELETE FROM tb_user WHERE id= '$id'";

	$hasil=mysqli_query($conn,$query);;

	if($hasil){
		header('location:pengguna_operator.php');
	}else{
		echo "hapus data gagal ";
	}
	
 ?>