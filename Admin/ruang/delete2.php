<?php 
	include_once("../../config/koneksi.php");

	$id =$_GET['id'];

	$query= "DELETE FROM tb_ruang WHERE kode_ruang= '$id'";

	$hasil=mysqli_query($conn,$query);;

	if($hasil){
		header('location:../ruang.php');
	}else{
		echo "hapus data gagal ";
	}
	
 ?>